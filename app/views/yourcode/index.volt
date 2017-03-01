
{{ content() }}

<div align="right">
    {{ link_to("yourcode/new", "Add code snippets to your account", "class": "btn btn-primary") }}
</div>
<div class="body">
    {{ form('yourcode/search', 'class':'sky-form')}}
    <header>Search Code Snippets</header>

    <fieldset>

        {% for element in form %}
            {% if is_a(element, 'Phalcon\Forms\Element\Hidden') %}
                {{ element }}
            {% else %}
                <div class="row">
                    <section class="col col-6">
                    {{ element.label(['class': 'input']) }}
                    <i class="icon-append fa fa-briefcase"></i>
                        {{ element }}
                    </section>
                </div>
            {% endif %}
        {% endfor %}

        <div class="control-group">
            {{ submit_button("Search", "class": "btn btn-primary") }}
        </div>

    </fieldset>

</form>
</div>