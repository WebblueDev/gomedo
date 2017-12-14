<div class="popup popup-m">
    <header>
        <h3>{{trans('user.auth.register.success.title')}}</h3>
        <button class="popup-hide"></button>
    </header>
    <div class="body">
        {{$user->name}}, dein Account wurde erstellt. Dieser muss nun allerdings noch bestätigt werden. Wir haben
        dir eine Mail mit allen weiteren Informationen an {{$user->email}} geschickt.
    </div>
</div>