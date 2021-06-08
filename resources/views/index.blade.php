<html>
    <body>
        <h2> Pays: {{ $nameFrance }}</h1>
        
        <h2> Pays: {{ $nameJapan }}</h1>

        <p> Il y'a {{ $numberEmployeesFrance }} employés en France</p>
        
        <p> Il y'a {{ $numberEmployeesJapan }} employés en France</p>
        
        <p> Le prix du moyen du ticket en france est: {{ $priceTicketFrance }} </p>

        <p> Le prix moyen du ticket au japon est: {{ $priceTicketJapan }}</p>

        <p> La taille du réseau ferroviare en France est de: {{ $sizeRailwayFrance}} km2 </p>

        <p> La taille du réseau ferroviare au Japon est de: {{ $sizeRailwayJapan }} km2 </p>    

        <p> La vitesse moyenne en France est de : {{ $speedAverageFrance }} km/h </p>
        
        <p> La vitesse moyenne au Japon est de : {{ $speedAverageJapan }} km/h </p>

        <p> Le taux deraillement de la france est de : {{$railwayDeraillementFrance}} % </p>
        
        <p> Le taux de porte ouverte pour la france est de : {{$mobilityOpenDoorTrainFrance}} % </p>
    </body>
</html>