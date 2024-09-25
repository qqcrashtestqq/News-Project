<style>
    .register-form {

        margin: 0 auto;
    }

    .register-form__form {
        max-width: 675px;
        background-color: #D9D9D9;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 15px;
    }

    .register-form__form-input {
        max-width: 300px;
    }

</style>


<div class="register-form">
    <form method="post" action="{{route('user_login')}}" class="register-form__form">
        @csrf
        <label for="" class="register-form__form-label">Ваш email</label>
        <input name="email" type="text" class="register-form__form-input" placeholder="email">

        <label for="" class="register-form__form-label">Ваш пароль</label>
        <input name="password" type="text" class="register-form__form-input" placeholder="password">

        <button>Login</button>
    </form>
</div>
