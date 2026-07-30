<?php

use App\Events\ContactSubmitted;
use App\Mail\ContactNotificationMail;
use App\Mail\ContactSuccessMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
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
        // $contact =  Contact::create($validated);
        $contact  = $validated;
         
         ContactSubmitted::dispatch($contact);


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
    <x-seo.meta title="ShreezaTech | Contact" description="Get in touch with ShreezaTech. Start your next project with a free consultation." />
    <x-contact.form />
    <x-contact.map />
    <x-contact.faq />
</div>