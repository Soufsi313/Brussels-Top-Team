<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Brussels Top Team</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'includes/header.php'; ?>


    <main>


        <!-- ==============================
             HERO CONTACT
             ============================== -->

        <section class="contact-hero">

            <div class="contact-hero-content">

                <p class="section-subtitle">
                    BRUSSELS TOP TEAM
                </p>

                <h1>
                    CONTACTEZ<br>
                    LE BTT.
                </h1>

                <p>
                    UNE QUESTION ? UNE ENVIE DE NOUS REJOINDRE ?
                </p>

            </div>

        </section>


        <!-- ==============================
             INFORMATIONS
             ============================== -->

        <section class="contact-information">

            <div class="contact-information-content">

                <div class="contact-information-intro">

                    <p class="section-subtitle">
                        PARLONS SPORT
                    </p>

                    <h2>
                        UNE QUESTION,<br>
                        UNE RÉPONSE.
                    </h2>

                    <p>
                        Vous souhaitez découvrir le Brussels Top Team,
                        obtenir des informations sur nos entraînements
                        ou simplement échanger avec nous ?
                    </p>

                    <p>
                        N'hésitez pas à nous contacter. Notre équipe
                        se fera un plaisir de vous répondre.
                    </p>

                </div>


                <div class="contact-details">


                    <div class="contact-detail">

                        <span>
                            01
                        </span>

                        <h3>
                            ENTRAÎNEMENTS
                        </h3>

                        <p>
                            Mardi soir<br>
                            Jeudi soir
                        </p>

                    </div>


                    <div class="contact-detail">

                        <span>
                            02
                        </span>

                        <h3>
                            EMAIL
                        </h3>

                        <p>
                            contact@brusselstopteam.be
                        </p>

                    </div>


                    <div class="contact-detail">

                        <span>
                            03
                        </span>

                        <h3>
                            RÉSEAUX SOCIAUX
                        </h3>

                        <p>
                            Instagram<br>
                            Facebook<br>
                            TikTok
                        </p>

                    </div>


                </div>

            </div>

        </section>


        <!-- ==============================
             FORMULAIRE
             ============================== -->

        <section class="contact-form-section">

            <div class="contact-form-container">


                <div class="contact-form-intro">

                    <p class="section-subtitle">
                        ÉCRIVEZ-NOUS
                    </p>

                    <h2>
                        VOTRE<br>
                        MESSAGE.
                    </h2>

                    <p>
                        Une question concernant les cours, les
                        abonnements ou le fonctionnement du club ?
                        Envoyez-nous un message.
                    </p>

                </div>


                <form class="contact-form" action="#" method="post">


                    <div class="form-group">

                        <label for="name">
                            Nom
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Votre nom"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="votre@email.com"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="subject">
                            Sujet
                        </label>

                        <select
                            id="subject"
                            name="subject"
                        >

                            <option value="">
                                Choisissez un sujet
                            </option>

                            <option value="boxe">
                                Boxe anglaise
                            </option>

                            <option value="hyrox">
                                HYROX
                            </option>

                            <option value="futsal">
                                BTT Futsal
                            </option>

                            <option value="girls">
                                BTT Girls
                            </option>

                            <option value="abonnement">
                                Abonnement
                            </option>

                            <option value="autre">
                                Autre demande
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Votre message..."
                            required
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="contact-submit"
                    >
                        Envoyer le message
                    </button>


                </form>

            </div>

        </section>


        <!-- ==============================
             CTA
             ============================== -->

        <section class="contact-cta">

            <div class="contact-cta-content">

                <p class="section-subtitle">
                    PRÊT À COMMENCER ?
                </p>

                <h2>
                    REJOIGNEZ<br>
                    LE COLLECTIF.
                </h2>

                <p>
                    Découvrez nos formules et venez vous entraîner
                    avec le Brussels Top Team.
                </p>

                <a
                    href="abonnements.php"
                    class="hero-button"
                >
                    Voir les abonnements
                </a>

            </div>

        </section>


    </main>


    <?php include 'includes/footer.php'; ?>


</body>

</html>