<div class="modal is-medium">
    <header>
        <h3>{{trans('user.auth.register.success.title')}}</h3>
        <button class="modal-hide"></button>
    </header>
    <div class="body">
        {{$user->name}}, dein Account wurde erstellt. Dieser muss nun allerdings noch bestätigt werden. Wir haben
        dir eine Mail mit allen weiteren Informationen an {{$user->email}} geschickt.
    </div>
</div>