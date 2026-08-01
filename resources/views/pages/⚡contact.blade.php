<?php

use App\Events\ContactSubmitted;
use Livewire\Component;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $service = '';
    public string $message = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ];
    }

    public function submit(): void
    {
        $validated = $this->validate();
        $validated['created_at'] = now();

        ContactSubmitted::dispatch($validated);

        session()->flash(
            'success',
            'Thank you! Your message has been sent successfully.'
        );

        $this->reset([
            'name',
            'email',
            'phone',
            'service',
            'message',
        ]);
    }
};

?>
<div>
    <x-seo.meta title="Shreeza | Contact" description="Get in touch with Shreeza. Start your next project with a free consultation." />
    <x-contact.form />
    <x-contact.map />
    <x-contact.faq />
</div>