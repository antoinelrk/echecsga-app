<?php include('layout/header.php') ?>
<main>
    <div class="contact">
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="subject">Que concerne votre message ?</label>
                <select name="" id="">
                    <option value="">element 1</option>
                    <option value="">element 2</option>
                    <option value="">element 3</option>
                    <option value="">element 4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Votre adresse mail</label>
                <input type="email" placeholder="hello@monadressemail.com">
            </div>

            <div class="form-group">
                <label for="fullname">Votre nom complet</label>
                <input type="fullname" placeholder="Lucas ENGELMANN">
            </div>

            <div class="form-area">
                <label for="content"></label>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Votre message..."></textarea>
            </div>

            <span class="disclaim">*tous les champs sont obligatoires</span>

            <button class="btn-submit" type="submit">
                <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24">
                        <path d="M23,2H1C0.4,2,0,2.4,0,3v18c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V3C24,2.4,23.6,2,23,2z M20.7,6.8l-8,7 C12.5,13.9,12.2,14,12,14s-0.5-0.1-0.7-0.2l-8-7c-0.4-0.4-0.5-1-0.1-1.4c0.4-0.4,1-0.5,1.4-0.1l7.3,6.4l7.3-6.4 c0.4-0.4,1-0.3,1.4,0.1C21.1,5.8,21.1,6.4,20.7,6.8z"></path>
                    </svg>
                </figure>
            </button>
        </form>
    </div>
</main>
<?php include('layout/footer.php') ?>