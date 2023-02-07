<section id="subscribe">
    <div class="content">
        <p class="title">Want to know our newsletter? Subscribe now!</p>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipisc</p>
        <form action="">
            
            <div id="email-container" class="input-container textarea-container">
                @include('components.form.input', [
                    'text' => 'text',
                    'id' => 'email-input',
                    'class' => '',
                    'name' => 'email',
                    'placeholder' => '',
                    'min' => '',
                    'max' => '',
                    'keypress' => ''
                ])
                <span>Your Email Adress</span>
            </div>
            @include('components.buttons.btn-normal', [
                'class' => 'subscribe',
                'text' => 'SUBSCRIBE NOW'
            ])
        </form>
    </div>
</section>
