<div class="container-messages">
    <div class="messages">
        <div class="messages-container" v-for="message in messages">
            <div class="messages-container-header">
                <h1 class="messages-container-header-heading">Wiadomość od: ${ jsonParser(message.options).email }</h1>
            </div>
            <div class="messages-container-body">
                <p class="messages-container-body-content">
                    ${ jsonParser(message.options).message }
                </p>
            </div>
        </div>
    </div>
</div>