document.addEventListener('alpine:init', () => {
    Alpine.data('exactMeshWave', () => ({
        init() {
            const canvas = this.$refs.meshCanvas;
            const ctx = canvas.getContext('2d');
            let frameId;

            const resize = () => {
                canvas.width = canvas.parentElement.offsetWidth * window.devicePixelRatio;
                canvas.height = canvas.parentElement.offsetHeight * window.devicePixelRatio;
                ctx.scale(window.devicePixelRatio, window.devicePixelRatio);
            };
            resize();
            window.addEventListener('resize', resize);

            const pointsCount = 130; 
            let time = 0;

            // Restructured arrays mapping Green, Blue, and Golden mesh elements
            const structures = [
                { amp: 22, freq: 0.007, speed: 0.006, baseHeight: 0.48, color: '16, 185, 129' },  // Emerald Green
                { amp: 18, freq: 0.011, speed: -0.009, baseHeight: 0.54, color: '59, 130, 246' }, // Electric Blue
                { amp: 26, freq: 0.005, speed: 0.004, baseHeight: 0.42, color: '234, 179, 8' }    // Bright Golden
            ];

            const render = () => {
                const w = canvas.width / window.devicePixelRatio;
                const h = canvas.height / window.devicePixelRatio;
                
                ctx.clearRect(0, 0, w, h);
                time += 1;

                structures.forEach((wave) => {
                    let pointCache = [];

                    // Step 1: Calculate coordinates for all nodes in this specific wave color thread
                    for (let i = 0; i < pointsCount; i++) {
                        const x = (w / (pointsCount - 1)) * i;
                        
                        // Keeps waves relatively low profile in center and sweeps upwards toward the outer edges
                        const edgeWeight = Math.pow(Math.abs(i - pointsCount / 2) / (pointsCount / 2), 2.2);
                        
                        const y = (h * wave.baseHeight) + 
                                  (Math.sin(i * wave.freq + (time * wave.speed)) * wave.amp * (0.15 + edgeWeight * 2.2)) +
                                  (Math.cos(i * 0.02 + (time * 0.003)) * (wave.amp * 0.25));
                        
                        pointCache.push({ x, y });
                    }

                    // Step 2: Draw connecting mesh vector links and dot matrix heads
                    for (let i = 0; i < pointCache.length; i++) {
                        const pt = pointCache[i];

                        // Soft fading mesh lines matching the specific thread's color palette
                        if (i < pointCache.length - 1) {
                            ctx.beginPath();
                            ctx.moveTo(pt.x, pt.y);
                            ctx.lineTo(pointCache[i + 1].x, pointCache[i + 1].y);
                            ctx.strokeStyle = `rgba(${wave.color}, 0.12)`;
                            ctx.lineWidth = 0.5;
                            ctx.stroke();
                        }

                        // Draw main particle node heads
                        ctx.beginPath();
                        ctx.arc(pt.x, pt.y, 1.1, 0, Math.PI * 2);
                        ctx.fillStyle = `rgba(${wave.color}, 0.60)`;
                        ctx.fill();

                        // Vertical cascading background accents
                        if (i % 5 === 0) {
                            ctx.beginPath();
                            ctx.arc(pt.x, pt.y + (12 * Math.sin(time * 0.02 + i)), 0.5, 0, Math.PI * 2);
                            ctx.arc(pt.x, pt.y - (8 * Math.cos(time * 0.01 + i)), 0.4, 0, Math.PI * 2);
                            ctx.fillStyle = `rgba(${wave.color}, 0.30)`;
                            ctx.fill();
                        }
                    }
                });

                frameId = requestAnimationFrame(render);
            };

            render();

            this.$cleanup(() => {
                cancelAnimationFrame(frameId);
                window.removeEventListener('resize', resize);
            });
        }
    }));
});
