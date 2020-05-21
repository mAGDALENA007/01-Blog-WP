<?php
/*
    Template Name: Home Page
 */

get_header(); ?>

<main role="main">

      <section class="jumbotron  text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Inspiracje ogrodnicze.</h1>
          <p class="lead text-muted"></p>
          <p>
            <a href="#" class="btn btn-primary my-2">O nas</a>
            <a href="#" class="btn btn-secondary my-2">Kontakt</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/wp-content/themes/blog_theme/assets/img/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Wiosenne kwiaty w Twoim ogrodzie. Zapoznaj się ze sposobami pielęgnacji. Przeczytaj więcej na temat prac w ogrodzie.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Przeczytaj</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edytuj</button>
                    </div>
                    <small class="text-muted">10 minut</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/wp-content/themes/blog_theme/assets/img/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Wiosenne kwiaty w Twoim ogrodzie. Zapoznaj się ze sposobami pielęgnacji. Przeczytaj więcej na temat prac w ogrodzie.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Przeczytaj</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edytuj</button>
                    </div>
                    <small class="text-muted">10 minut</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/wp-content/themes/blog_theme/assets/img/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Wiosenne kwiaty w Twoim ogrodzie. Zapoznaj się ze sposobami pielęgnacji. Przeczytaj więcej na temat prac w ogrodzie.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Przeczytaj</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edytuj</button>
                    </div>
                    <small class="text-muted">10 minut</small>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div> 
      </div>

      <div class="container">

      <form class="form-signin">
      <img class="mb-4" src="https://" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Zarejestruj się</h1>
      <label for="inputEmail" class="sr-only">Email adres</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Hasło</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Zapamiętaj mnie
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj się</button>
    </form>

    </div> <!--/ .container -->
    </main>

<?php get_footer(); ?>
