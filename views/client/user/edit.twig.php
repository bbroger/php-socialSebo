{% extends 'partials/main.twig.php' %}

{% block title %}Edit{% endblock %}

{% block styles %}
<link rel="stylesheet" href="{{BASE}}assets/css/login.css">
{% endblock %}

{% block body %}
  <div class="">
    <h1 class="display-4 mb-4">Edit your profile</h1>
    <form method="POST" action="{{BASE}}user/update" id="frmEdit">
        <fieldset> 
            <div class="form-group">
                <label class="form-control-label" for="name">
                    Name
                </label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="name"
                    name="name"
                    value="{{user.name}}"
                    placeholder="Ex: Brayan Jenkis"
                    autofocus
                >
                <span class="invalid-feedback"></span>
            </div>
        </fieldset>
        <fieldset>
            <div class="form-group">
                <label class="form-control-label" for="email">
                    Email address
                </label>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input 
                            type="email" 
                            class="form-control" 
                            id="email"
                            name="email"
                            value="{{user.email}}"
                            placeholder="youremail@domain.com"
                        >
                        <span class="invalid-feedback"></span>
                    </div>
                </div>
            </div>

            <div class="btn-actions">
                <div>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
  </div>
{% endblock %}

{% block scripts %}
<script type="module" src="{{BASE}}assets/js/min/editUser.min.js"></script>
{% endblock %}