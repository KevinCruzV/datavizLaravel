<script>
var ctx = document.getElementById('graph1').getContext('2d');
var ctx2 = document.getElementById('graph2').getContext('2d');

var data = {
    labels: ['France', 'Japon'],
       datasets:[
          {
            label:'France',
              data: [<?php echo  $numberEmployeesFrance  ?>, <?= $numberEmployeesJapan ?>],
              backgroundColor: [ '#425FC6', '#DA4A4A' ]},
           {
               label: 'Japon',
               backgroundColor: '#DA4A4A'
               
               
           } 
       ]
    }

var options = {
     y: {
         type: 'linear',
            min: 0,
            max: 310000
            },
    
    plugins: {
            title: {
                display: true,
                text: 'EFFECTIFS',
                font: {
                        size: 20
                    }
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 14
                    }
                }
            }
        }
}

var config =  {
    type: 'bar',
    data: data,
    options: options
    }
//Failures Graph
var data2 = {
    labels: ['France', 'Japon'],
       datasets:[
          {
            label:'France',
              data: [<?php echo  $railwayTracksDefaillanceFrance  ?>, <?= $railwayTracksDefaillanceJapan ?>],
              backgroundColor: [ '#425FC6', '#DA4A4A' ]},
           {
               label: 'Japon',
               backgroundColor: '#DA4A4A'
               
               
           } 
       ]
    }

var options2 = {
     y: {
         type: 'linear',
            min: 0,
            max: 20
            },
    
    plugins: {
            title: {
                display: true,
                text: 'PANNES',
                font: {
                        size: 20
                    }
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 14
                    }
                }
            }
        }
}

var config2 =  {
    type: 'bar',
    data: data2,
    options: options2
    }

var graph1 = new Chart(ctx, config)
var graph2 = new Chart(ctx2, config2)
</script>
