<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maquette one page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
</head>

<body>

    <div id="centre">

        <div id="fond">

            <header>

                <div id="present">
                    <div class="iconSociety">
                        <img src="./images/logoCazier.svg" width="100px" height="100px">
                    </div>
                    <div class="societyName">
                        <h4>Cazier Maraîchers</h4>
                    </div>
                </div>

                <nav>
                    <ul>
                        <li onclick="slideUn()">Qui sommes-nous ?</li>
                        <li onclick="slideDeux()">Nous contacter</li>
                        <li onclick="slideTrois()">Itinéraire</li>
                    </ul>
                </nav>

            </header>

        </div>


        <div id="container">

            <section id="itemUn">

                <h2>La société</h2>

                <p>
                    C'est depuis 1972 que nous travaillons avec les particuliers, tout comme avec les centrales d'achats
                    et les chaînes de grandes distribution.
                    <br>
                    L'ensemble de nos terres d'exploitations, situées dans les hortillonages de Camon et de Boves, nous
                    délivre des légumes de qualité. Nous les cultivons de manière traditionnelle, les lavons avec le
                    plus grand soin et enfin nous les stockons.
                    Nous n'utilisons aucun pesticide, ni engrais chimique. Cela pour preserver la diversité des animaux
                    et des plantes.
                    Notre objectif est de maintenir au sein de nos parcelles un équilibre limitant naturellement toute
                    attaque de ravageurs.
                    <br>
                    <br>
                    Ceci nous permet de vous proposer des produits sains gardant toute leur saveur afin qu'ils soient
                    prêts à faire le bonheur de vos
                    papilles, de votre estomac et surtout de votre santé.
                </p>

            </section>

            <section id="itemDeux">


                <button id="left-btn"><i class="arrow"></i></button>
                <img id="carousel" src="" alt="">
                <button id="right-btn"><i class="arrow"></i></button>


            </section>

            <section id="itemTrois">

                <h3>Nos produits</h3>

                <div class="produits">
                    <p>
                        Nous plantons et ceuillons nos légumes en grande quantité et en flux continu.
                        Certaines cultures peuvent varier au fil des saisons.
                    </p>
                    <p>
                        Voila la liste des produits disponibles, avec les périodes de production et prix au poids :
                    </p>
                </div>

                <div class="listeProduit">

                    <table class="pure-table">

                        <thead>
                            <tr>
                                <th>Production à partir du 20/04</th>
                                <th>Prix</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Radis (Botte)</td>
                                <td class="price"> 0.70 €</td>
                            </tr>
                            <tr>
                                <td>Navet Hatif (500g)</td>
                                <td class="price"> 1.10 € </td>
                            </tr>
                            <tr>
                                <td>Persil (botte)</td>
                                <td class="price"> 0.60 € </td>
                            </tr>
                            <tr>
                                <td>Oignons Jaunes (1 Kg)</td>
                                <td class="price"> 0.90 €</td>
                            </tr>
                            <tr>
                                <td>Echalottes (250g)</td>
                                <td class="price">1.00 € </td>
                            </tr>
                        </tbody>

                    </table>

                    <table class="pure-table">

                        <thead>
                            <tr>
                                <th>Production à partir du 15/07</th>
                                <th>Prix</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Laitue (la pièce)</td>
                                <td class="price"> 0.60 €</td>
                            </tr>
                            <tr>
                                <td>Batavia (la pièce)</td>
                                <td class="price"> 0.90 € </td>
                            </tr>
                            <tr>
                                <td>Chênes vertes (la pièce) </td>
                                <td class="price"> 1.00 €</td>
                            </tr>
                            <tr>
                                <td>Chênes rouges (la pièce) </td>
                                <td class="price"> 1.00 €</td>
                            </tr>
                            <tr>
                                <td>Céleri Branche (la pièce)</td>
                                <td class="price"> 1.10 €</td>
                            </tr>
                            <tr>
                                <td>Bettes (250g)</td>
                                <td class="price"> 1.20 € </td>
                            </tr>
                            <tr>
                                <td>Betteraves rouges (500g) </td>
                                <td class="price"> 1.00 €</td>
                            </tr>
                        </tbody>

                    </table>

                    <table class="pure-table">

                        <thead>
                            <tr>
                                <th>Production à partir du 01/10</th>
                                <th>Prix</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Radis (Botte)</td>
                                <td class="price"> 0.70 €</td>
                            </tr>
                            <tr>
                                <td>Navet Hatif (500g)</td>
                                <td class="price"> 1.10 € </td>
                            </tr>
                            <tr>
                                <td>Persil (botte)</td>
                                <td class="price"> 0.60 € </td>
                            </tr>
                            <tr>
                                <td>Oignons Jaunes (1 Kg)</td>
                                <td class="price"> 0.90 €</td>
                            </tr>
                            <tr>
                                <td>Echalottes (botte)</td>
                                <td class="price"> 1.00 € </td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <p class="indic">
                    Pour les commandes un formulaire se situant en bas de la page vous permettra de nous soumettre une
                    commande,
                    vous pouvez choisir vos articles en fonction du poid : 200g, 500g et 1Kg.
                    La facture vous sera adressez par mail par la suite. Et un second mail vous alertera pour indiquer
                    que vous pourrez retirer la commande chez nous (Itinéraire juste en de sous)
                </p>

            </section>

            <section id="itemQuatre">


                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d877.1646361002475!2d2.3288016410955255!3d49.88610812545892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e785bbb3616fe1%3A0xe0c1874cd2253f29!2s20%20Rue%20de%20la%20Terri%C3%A8re%2C%2080000%20Amiens!5e0!3m2!1sfr!2sfr!4v1644927544365!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <div class="coordonnees">

                    <div class="phone">
                        <p><i class="fa-solid fa-phone"></i> 03.22.46.17.28</p>
                    </div>

                    <div class="mail">
                        <p><i class="fa-solid fa-envelope"></i> alainczr22@gmail.com </p>
                    </div>


                    <div class="adress">
                        <p><i class="fa-solid fa-location-dot"></i> 20 rue de la Terrière, 80000, Amiens</p>
                    </div>

                    <div class="horaire">
                        <p><i class="fa-solid fa-calendar-days"></i>
                            Lundi: 10:00 - 19:00 <br>
                            Mardi: 10:00 - 19:00 <br>
                            Mercredi: 10:00 - 19:00 <br>
                            Jeudi: 10:00 - 19:00 <br>
                            Vendredi: 10:00 - 19:00 <br>
                            Samedi: 09:00 - 18:00
                        </p>
                    </div>

                </div>


            </section>

            <section id="itemCinq">

                <div id="infoContact">

                    <div id="allFlex">
                        <div id="leftFlex">
                            <div class="info1">

                                <p>
                                    N’hésitez pas à prendre contact pour nous adresser votre commande avec nous en nous
                                    laissant
                                    un
                                    message. Nous vous répondrons dans les plus brefs délais.
                                </p>

                                <p>Ou par téléphone : 03 22 46 17 28</p>

                            </div>


                            <form id="customer" method="post" action="sendEmail.php">


                                <div class="info2">

                                    <div>
                                        <input type="text" name="name" id="name" placeholder="Nom" required>

                                        <input type="text" name="firstName" id="firstName" placeholder="Prénom" required>
                                    </div>
                                    <div>
                                        <input type="email" name="email" id="email" placeholder="Mail" required>

                                        <input type="tel" name="phone" id="phone" placeholder="Telephone" required>
                                    </div>

                                </div>
                        </div>

                        <div id="rightFlex">

                            <div class="info3">

                                <input type="text" name="subject" id="subject" placeholder="sujet">

                                <textarea name="content" id="content" placeholder="Ecrivez ici votre message" cols="30" rows="10" required>
                                </textarea>

                                <input type="submit" value="Envoyer">

                            </div>

                        </div>



                    </div>

                    </form>

            </section>

            <footer>

                <img src="./images/separator-top.png">

                <nav>

                    <ul>
                        <li onclick="slideQuatre()">Haut de page</li>
                        <li onclick="slideUn()">Qui sommes-nous ?</li>
                        <li onclick="slideTrois()">Itinéraire</li>
                        <li>Créateur du site Web : Alain CAZIER</li>
                    </ul>

                </nav>

            </footer>

        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>