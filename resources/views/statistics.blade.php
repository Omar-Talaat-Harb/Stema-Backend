<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEMA-Statistics</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <script src="{{ asset('assets/JS/anychart-base.min.js') }}"></script>
    <script src="{{ asset('assets/JS/anychart-ui.min.js') }}"></script>
    <script src="{{ asset('assets/JS/anychart-exports.min.js') }}"></script>
    <link href="{{ asset('assets/CSS/anychart-ui.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/CSS/anychart-font.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-1 sidebar">
              <div class="container m-auto p-1 ">
                  <div class="mt-2 p-3 mb-5 pb-5">
                      <a href="{{ route('services') }}"><img src="{{ asset('assets/images/White logo - no background-no name.svg') }}" alt="STEMA-Logo"
                              width="50px"></a>


                  </div>
              </div>
          </div> <!-- end sideBar -->


          <div class="col-lg-11 statistics-content">
              <div class="container m-auto">
                <div class="row d-flex ">
                    <div class="col-lg-1 p-4 mt-2">
                        <a href="{{ route('services') }}">
                            <i class="fas fa-arrow-left fa-2x"></i>
                        </a>
                    </div> <!-- back button -->

                    <div class="col-lg-4 p-4 ">
                        <h3 class="mt-2">Data overview</h3>
                         </div> <!-- search -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 hstack gap-2  ms-auto user">
                        <div class=" ms-auto mt-4">
                            <h6>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
                            <p>{{ auth()->user()->role->type }} </p>
                        </div>
                        <div class="hstack gap-2 ">
                            <a href="{{ route('showProfile') }}"> <img src="{{ asset('assets/images/doctor.svg') }}" alt="user-photo" width="60px"></a>

                        </div>

                    </div>
                    <!-- <div class="col-lg-1"></div> -->



                </div> <!-- end of row doctor photo-->

                  
                  <div class="row status">
                  <!-- col-4 mt-5 mb-0 p-1 d-flex -->
                      <div class="col-4 mt-5 mb-0 p-1 d-flex  Accepted ">
                          <!-- <img class="p-2 m-3 mb-0 accpt" src="images/accepted.svg" width="20%" height="60%"> -->
                          <img class="p-2 m-3 mb-0 accpt" src="{{ asset('assets/images/accepted.svg') }}" width="20%" height="60%">
                          <div class="m-1">
                              <p class="text-muted p-0 m-0">Accepted data</p>
                              <p class="p-0" style="font-size: 30px;">{{ $data['approved'] }}<img src="{{ asset('assets/images/accepted-arrow.png') }}" alt="">
                              </p>

                          </div>
                      </div> <!-- Accepted -->

                      <!-- <div class="col-1"></div>-->  <!-- div-separated -->

                      <div class="col-4 mt-5  mb-0 p-1 d-flex Rejected ">
                          <img src="{{ asset('assets/images/rejected.svg') }}" class="p-2 m-3 mb-0 rejct" width="20%" height="60%">
                          <div class=" m-1">
                              <p class="text-muted p-0 m-0">Rejected data</p>
                              <p class="p-0" style="font-size: 30px;">{{ $data['rejected'] }} <img src="{{ asset('assets/images/rejected-arrow.png') }}" alt="">
                              </p>

                          </div>
                      </div> <!-- Rejected -->

                      <!-- <div class="col-1"></div> div-separated -->


                      <div class="col-4 mt-5  mb-0 p-1 d-flex Pendding ">
                          <img src="{{ asset('assets/images/pend.svg') }}" class="p-2 m-3 mb-0 pnd" width="20%" height="60%">
                          <div class="m-1">
                              <p class="text-muted p-0 m-0">Pendding</p>
                              <p class="p-0" style="font-size: 30px;">{{ $data['pending'] }}<img src="{{ asset('assets/images/pend-arrow.png') }}" alt="">
                              </p>

                          </div>
                      </div> <!-- Pendding -->

                      <!--<div class="col-1"></div>--> <!-- div-separated -->

                  </div> <!-- end of row  -->
             

                  <div class="row charts  ms-1 mt-2 p-3">
                      <div id="container" class="col-5 chart1 ">
                          <!-- <div  class="bg-black"></div> -->
                      </div> <!-- Donate Chart -->

                      <div class="col-1"></div> <!-- div-separated -->

                      <div id="container2" class="col-5 chart2 p-1 m-1">
                          <!-- <div id="container2"></div> -->
                      </div> <!-- Column Chart -->
                  </div>

                  
                  <form class="d-flex hstack gap-2 me-5" >
                      <a href='{{ route('services') }}'   class="btn ms-auto close m-2" >Close</a>
                  </form>

              </div> <!-- end container -->

          </div>
          <!--end files div  -->
      </div> <!-- end row -->

  </div>




  <script src="{{ asset('assets/JS/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/JS/wow.min.js') }}"></script>
  <script>
      new WOW().init();
  </script>
  <script src="{{ asset('assets/JS/aos.js') }}"></script>
  <script>
      AOS.init();
  </script>
  <script>
     
     anychart.onDocumentReady(function () {
       
          var min_x=0;
          var max_x=40;

          var min_y=40;
          var max_y=80;

          var min_o=80;
          var max_o=120;

          var min_a=120;
          var max_a=160;

          var min_t=160;
          var max_t=200;
          
        //volume stem cells
          var volume1={{ $data['volume1'] }} ;
          var volume2={{ $data['volume2'] }};
          var volume3={{ $data['volume3'] }};
          var volume4={{ $data['volume4'] }};
          var volume5={{ $data['volume5'] }};
          var total = volume1 + volume2 + volume3 + volume4 +volume5; 
          //total and volumes from ML data
          
          var chart = anychart.pie([
              [`${min_x}-${max_x}`, volume1/total],
              [`${min_y}-${max_y}`, volume2/total],
              [`${min_o}-${max_o}`, volume3/total],
              [`${min_a}-${max_a}`, volume4/total],
              [`${min_t}-${max_t}`, volume5/total]
           
          ]);

          // creates palette
          var palette = anychart.palettes.distinctColors();
          palette.items([{
                  color: '#0EB0BA'
              },
              {
                  color: '#E57361'
              },
              {
                  color: '#F4A952'
              },
              {
                  color: '#B9C1FB'
              },
              {
                  color: '#eec1ad'
              }
             
          ]);

          // set chart radius
          chart
              .radius('100%')
              // create empty area in pie chart
              .innerRadius('90%')
              // set chart palette
              .palette(palette);

          // set outline settings
         
          // format tooltip
          chart.tooltip().format('Percent Value: {%PercentValue}%');

          // create standalone label and set label settings
          var label = anychart.standalones.label();
          label
              .enabled(true)
              .text('LABEL')
              .width('100%')
              .height('100%')
              .adjustFontSize(true, true)
              .minFontSize(10)
              .maxFontSize(25)
              .fontColor('#60727b')
              .position('center')
              .anchor('center')
              .hAlign('center')
              .vAlign('middle');

          // set label to center content of chart
          chart.center().content(label);
          // set the chart title
          chart.title("Volume");


          // set container id for the chart
          chart.container('container');
          
          // initiate chart drawing
          chart.draw();
      });

      // column chart
      anychart.onDocumentReady(function () {
  
          var min_x=0;
          var max_x=10;

          var min_y=10;
          var max_y=20;

          var min_z=20;
          var max_z=30;

          var min_a=30;
          var max_a=40;

          var min_d=40;
          var max_d=50;
            //دي اللي هجيبها من منه
          var min_t=50;
          var max_t=60;

          var min_m=60;
          var max_m=70;

          
      //دي اللي هجيبها من الماشين
      //اعرف عدد الكولمنز او الاعمدة من مننه

          var value1={{ $data['WBCs1'] }};
          var value2={{ $data['WBCs2'] }};
          var value3={{ $data['WBCs3'] }};
          var value4={{ $data['WBCs4'] }};
          var value5={{ $data['WBCs5'] }};
          var value6={{ $data['WBCs6'] }};
          var value7={{ $data['WBCs7'] }};
          
          
  //   create data
    var data = [{
        x: `${min_x}-${max_x}`,
        value: value1,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_y}-${max_y}`,
        value: value2,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_z}-${max_z}`,
        value: value3,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_a}-${max_a}`,
        value: value4,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_d}-${max_d}`,
        value: value5,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_t}-${max_t}`,
        value: value6,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      },
      {
        x: `${min_m}-${max_m}`,
        value: value7,
        normal: {
          fill: "#0EB0BA",
          stroke: null,
          label: {
            enabled: true
          }
        },
        hovered: {
          fill: "#76D2D7",
          stroke: null,
          label: {
            enabled: true
          }
        },
        selected: {
          fill: "#109aa1",
          stroke: null,
          label: {
            enabled: true
          }
        }
      }
    ];

    // create a chart
    chart = anychart.column();
    // set the chart title
    chart.title("Range of WBCs");


    // create a column series and set the data
    var series = chart.column(data);
    
    // display the chart in the container
    chart.container("container2");

    // initiate drawing the chart
    chart.draw();

  });
  </script>

</body>

</html>
