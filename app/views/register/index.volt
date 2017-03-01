
{{ content() }}

<div class="body bg-blue">
{{ form('register', 'id': 'registerForm', 'class': 'sky-form', 'onbeforesubmit': 'return false') }}
<header>Register for ParaPHP</header>
    <fieldset>

        <div class="row">
            <section class="col col-11">
            {{ form.label('name', ['class': 'control-label input']) }}
            <div class="controls">
                {{ form.render('name', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="name_alert">
                    <strong>Warning!</strong> Please enter your full name
                </div>
            </div>
            </section>
        </div>

        <div class="row">
            <section class="col col-5">
            {{ form.label('username', ['class': 'control-label input']) }}
            <div class="controls">
                {{ form.render('username', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="username_alert">
                    <strong>Warning!</strong> Please enter your desired user name
                </div>
            </div>
            </section>
        </div>

        <div class="row">
            <section class="col col-11">
            {{ form.label('email', ['class': 'control-label input']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>Warning!</strong> Please enter your email
                </div>
            </div>
            </section>
        </div>

        <div class="row">
            <section class="col col-5">
            {{ form.label('password', ['class': 'control-label input']) }}
            <div class="controls">
                {{ form.render('password', ['class': 'form-control']) }}
                <p class="help-block">(minimum 8 characters)</p>
                <div class="alert alert-warning" id="password_alert">
                    <strong>Warning!</strong> Please provide a valid password
                </div>
            </div>
            </section>
        </div>

        <div class="row">
            <section class="col col-5">
            <label class="input" for="repeatPassword">Repeat Password</label>
                {{ password_field('repeatPassword', 'class': 'input') }}
                <div class="alert" id="repeatPassword_alert">
                    <strong>Warning!</strong> The password does not match
                </div>
            </div>
            </section>

        <div class="form-actions">
            {{ submit_button('Register', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </div>
</div>
    </fieldset>
</form>
</div>
