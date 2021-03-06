
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spinnaker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
    <title>Document</title>
</head>

<body>
    <main>
        <!-- HERO BANNER -->
        <section id="heroBanner">
            <nav>
                <span>2021</span>
                <button>Button</button>
            </nav>
            <h2>POURQUOI LES TRAINS FRANÇAIS</h2>
            <h2>SONT TOURJOURS EN RETARDS ?</h2>
            <p>Deux trains, <br> deux ambiances.</p>
            <p>Groupe 3</p>
        </section>
        <!-- TRAJET & INTRODUCTION -->
        <section id="roadMap">
            <!--LEFT PART OF THE PAGE-->
            <div id="trajet">
                <h1>LE TRAJET</h1>
                <p>Vue Mondiale</p>
                <p>France vs Japon</p>
                <p>Tgv vs Shinkansen</p>
                <p>Introduction</p>
                <h4>Vitesse</h4>
                <h4>Effectifs</h4>
                <h4>Pannes</h4>
            </div>
            <!--RIGHT PART OF THE PAGE-->
            <div id="intro">
                <h1>INTRODUCTION</h1>
                <p> <span>Une introduction simple</span>, sur l’impact des <br>
                    trains dans le monde... en trois / quatres <br>
                    lignes maximum.</p>
                <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="200" cy="200" r="200" fill="#425FC6" />
                    <path
                        d="M88.6253 177.222H98.2127C101.448 177.222 104.035 177.951 105.971 179.409C108.068 180.982 109.116 183.243 109.116 186.194C109.116 189.27 108.011 191.72 105.801 193.543C103.704 195.263 101.015 196.123 97.7342 196.123H91.7869V201.421H88.6253V177.222ZM98.1614 193.252C100.486 193.252 102.32 192.671 103.664 191.509C105.066 190.301 105.766 188.598 105.766 186.399C105.766 184.291 104.98 182.685 103.408 181.58C101.995 180.589 100.098 180.093 97.7171 180.093H91.7869V193.252H98.1614ZM113.747 177.222H116.909V198.55H130.102V201.421H113.747V177.222ZM142.988 177.222H144.783L155.259 201.421H151.806L149.516 196.123H137.4L134.922 201.421H131.675L142.988 177.222ZM148.286 193.252L146.098 188.176C145.825 187.538 145.557 186.878 145.295 186.194L144.612 184.263C144.179 183.01 143.922 182.155 143.843 181.699H143.638C143.546 182.155 143.341 182.804 143.022 183.648C143.022 183.648 142.732 184.388 142.151 185.869C141.889 186.507 141.604 187.157 141.296 187.818L138.75 193.252H148.286ZM158.83 177.222H161.599L177.185 196.328V177.222H180.005V201.421H177.356L161.65 182.178V201.421H158.83V177.222ZM186.311 177.222H204.375V180.093H189.472V186.621H202.751V189.492H189.472V198.55H204.717V201.421H186.311V177.222ZM216.816 180.093H207.724V177.222H229.07V180.093H219.978V201.421H216.816V180.093ZM233.376 177.222H251.44V180.093H236.538V186.621H249.817V189.492H236.538V198.55H251.782V201.421H233.376V177.222ZM266.77 177.222H284.834V180.093H269.931V186.621H283.21V189.492H269.931V198.55H285.176V201.421H266.77V177.222ZM290.183 177.222H292.951L308.537 196.328V177.222H311.357V201.421H308.708L293.003 182.178V201.421H290.183V177.222ZM125.591 225.673C125.591 229.262 123.939 231.74 120.635 233.107L125.232 242.421H121.557L117.405 233.996C116.277 234.167 115.097 234.252 113.867 234.252H107.578V242.421H104.416V218.222H114.346C117.923 218.222 120.595 218.712 122.361 219.692C124.514 220.876 125.591 222.87 125.591 225.673ZM114.294 231.381C116.846 231.381 118.738 231.028 119.968 230.321C121.483 229.444 122.241 227.963 122.241 225.878C122.241 223.166 120.486 221.628 116.977 221.264C115.963 221.15 114.921 221.093 113.85 221.093H107.578V231.381H114.294ZM133.948 239.362C132.763 238.28 131.823 236.992 131.128 235.5C130.444 234.007 130.102 232.503 130.102 230.988C130.102 229.473 130.256 228.162 130.564 227.057C130.883 225.941 131.333 224.915 131.914 223.981C132.495 223.035 133.19 222.187 133.999 221.435C134.808 220.683 135.708 220.045 136.699 219.521C138.773 218.427 141.034 217.88 143.484 217.88C145.831 217.88 148.018 218.404 150.046 219.452C152.017 220.478 153.589 221.902 154.763 223.725C155.959 225.627 156.557 227.741 156.557 230.065C156.557 233.745 155.259 236.793 152.661 239.208C151.032 240.723 149.066 241.766 146.765 242.336C145.614 242.62 144.281 242.763 142.766 242.763C141.251 242.763 139.701 242.467 138.117 241.874C136.534 241.27 135.144 240.433 133.948 239.362ZM136.289 223.383C135.412 224.215 134.717 225.2 134.204 226.339C133.703 227.479 133.452 228.732 133.452 230.099C133.452 231.466 133.714 232.748 134.238 233.944C134.762 235.141 135.48 236.183 136.391 237.072C138.34 238.975 140.704 239.926 143.484 239.926C146.184 239.926 148.474 239.037 150.354 237.26C152.256 235.46 153.208 233.232 153.208 230.578C153.208 228.778 152.752 227.109 151.841 225.57C150.986 224.112 149.784 222.939 148.235 222.05C146.708 221.161 145.147 220.717 143.552 220.717C141.957 220.717 140.567 220.956 139.382 221.435C138.209 221.902 137.178 222.551 136.289 223.383ZM169.136 221.093H160.044V218.222H181.389V221.093H172.297V242.421H169.136V221.093ZM194.292 218.222H196.086L206.562 242.421H203.11L200.82 237.123H188.703L186.225 242.421H182.978L194.292 218.222ZM199.59 234.252L197.402 229.176C197.129 228.538 196.861 227.878 196.599 227.194L195.915 225.263C195.482 224.01 195.226 223.155 195.146 222.699H194.941C194.85 223.155 194.645 223.804 194.326 224.648C194.326 224.648 194.035 225.388 193.454 226.869C193.192 227.507 192.908 228.157 192.6 228.818L190.054 234.252H199.59ZM217.226 221.093H208.135V218.222H229.48V221.093H220.388V242.421H217.226V221.093ZM233.786 218.222H236.948V242.421H233.786V218.222ZM246.296 239.362C245.111 238.28 244.171 236.992 243.476 235.5C242.793 234.007 242.451 232.503 242.451 230.988C242.451 229.473 242.605 228.162 242.912 227.057C243.231 225.941 243.681 224.915 244.263 223.981C244.844 223.035 245.539 222.187 246.347 221.435C247.156 220.683 248.056 220.045 249.048 219.521C251.121 218.427 253.383 217.88 255.832 217.88C258.179 217.88 260.367 218.404 262.395 219.452C264.366 220.478 265.938 221.902 267.112 223.725C268.308 225.627 268.906 227.741 268.906 230.065C268.906 233.745 267.607 236.793 265.01 239.208C263.38 240.723 261.415 241.766 259.114 242.336C257.963 242.62 256.63 242.763 255.115 242.763C253.599 242.763 252.05 242.467 250.466 241.874C248.882 241.27 247.492 240.433 246.296 239.362ZM248.638 223.383C247.76 224.215 247.065 225.2 246.553 226.339C246.051 227.479 245.801 228.732 245.801 230.099C245.801 231.466 246.063 232.748 246.587 233.944C247.111 235.141 247.829 236.183 248.74 237.072C250.688 238.975 253.052 239.926 255.832 239.926C258.533 239.926 260.823 239.037 262.702 237.26C264.605 235.46 265.556 233.232 265.556 230.578C265.556 228.778 265.101 227.109 264.189 225.57C263.335 224.112 262.133 222.939 260.583 222.05C259.057 221.161 257.496 220.717 255.901 220.717C254.306 220.717 252.916 220.956 251.731 221.435C250.557 221.902 249.526 222.551 248.638 223.383ZM274.392 218.222H277.16L292.746 237.328V218.222H295.566V242.421H292.917L277.212 223.178V242.421H274.392V218.222Z"
                        fill="#F1F1F1" />
                </svg>
            </div>
        </section>
        <!--INFORMATIONS-->

        <section id="info">

            <div id="france">
                <h1>France</h1>

                <!--Name of the compagnie -->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#425FC6" />
                    </svg>
                    <p><?= $compagnyFrance?></p>
                </div>

                <!--Number of km lanes -->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#425FC6" />
                    </svg>
                    <p><?= $sizeRailwayFrance ?>km de voies</p>
                </div>

                <!--Number of station-->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#425FC6" />
                    </svg>
                    <p><?= $numberStationFrance ?> Nombres de gares </p>
                </div>

                <!--Number of passengers-->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#425FC6" />
                    </svg>
                    <p><?= $frequentationFrance?> Passagers / Journalier</p>
                </div>
            </div>
            <div id="japon">
                <h1>Japon</h1>

                <!--Name of the compagnie -->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#F1F1F1" />
                    </svg>
                    <p><?=$compagnyJapan?>Nom de la compagnie</p>
                </div>

                <!--Number of km lanes -->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#F1F1F1" />
                    </svg>
                    <p><?=$sizeRailwayJapan?>km de voies</p>
                </div>

                <!--Number of station-->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#F1F1F1" />
                    </svg>
                    <p><?= $numberStationJapan?> Nombres de gares </p>
                </div>

                <!--Number of passengers-->
                <div class="contained">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" fill="#F1F1F1" />
                    </svg>
                    <p><?=$frequentationJapan?> Passagers / journalier </p>
                </div>

            </div>
        </section>

        <section id="comparison">
            <h1>TGV VS SHINKANSEN</h1>
            <h4>VITESSE</h4>
            <figure>
                <img src=" {{ asset('img/train_shinkansen-removebg-preview (1) 3.png') }}" alt="" id="trainShinkansen">
            </figure>
            <figure>
                <img src="{{ asset('img/train_français-removebg-preview 3.png') }}" alt="" id="trainTgv">
            </figure>
            <section id="countryC">

                <h2>TGV</h2>
                <div id="tgv">
                    <h3><?= $speedAverageFrance?>km/h</h3>
                    <p>Vitesse commercial</p>
                    
                </div>
                <h2>SHINKANSEN</h2>
                <div id="shinkansen">
                    
                    <h3><?= $speedAverageJapan?>km/h</h3>
                    <p>Vitesse commercial</p>
                    
                </div>
            </section>
        </section>
        <section id="employees">
         <h2>TGV VS SHINKANSEN</h2>
            <div class="chart-container">
                     <canvas id="graph1"></canvas>
            </div>
        </section>
        <section id="failures">
            <h2>TGV VS SHINKANSEN</h2>
                <div class="chart-container">
                    <canvas id="graph2"></canvas>
            </div>
        </section>
    </main>

</body>
<?php require"js/script.php"; ?>

</html>