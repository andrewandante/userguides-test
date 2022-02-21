<div class="hero">
    <div class="container">
        <div class="hero__title">
            <h1>$Title</h1>
        </div>
    </div>
</div>

<main>
    <article>
        <div class="container">
            <div class="cms-docs">
                <span class="menu__hamburglar"></span>
                <div class="cms-docs__menu navigation navigation--secondary">
                    <h4 class="cms-docs__menu-title">Menu</h4>
                    <span class="close"></span>
                    $Navigation
                </div>
                <div class="cms-docs__content">
                    $Content
                </div>
            </div>
        </div>
    </article>

    <% if $Form %>
        $Form
    <% end_if %>
</main>
