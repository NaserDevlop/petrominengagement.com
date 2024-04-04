 <!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  	<title>Calendar  </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">                                                                                  </script>


      

      
      
      
      
      
      
      
    </head>
    <div id="out">
    <div id="loader" class="center"></div>
    </div>
         
    <body>
        
   
           <!-- --------------------   BUTTONS --------------------------- -->
            
        
            <div class="  button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i>  </div>
 

				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
		    </div>
        <!-- ----------------------------------------------------------- -->





        
        <section  class="wrap-srction" id="naser">
               <div class="imagebox">  </div>
               <div class="imageboxheader">  </div>
               <div class="imageboxheader2">   </div>
               <button class="morebtn" id="morebtn">Learn more</button>  
                    <div class="content">
                <h1 id="monthesnames">  <div class="head-month2"  ></div></h1>


<!-- -----------contentbody-------------------------- -->

 <div class="contentbody" id="contentbod">
    <h4>Highlights Of The Month</h4>
  
   
             
<ul>
<span></span> <li></li>

<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
<span></span> <li></li>
 
</ul>


<!-- <p id="reset">Today</p>  -->
 <div id="foundingdaylogo"></div> 

 <p id="notes"> </p>
                             
 <div id="foundingdayman"></div>
<!-- --------------------------------------------------------------- -->


<!-- --------------------------CALENDAR-HEADER------------------------------- -->
            <div class="wrap-header  ">
				      <p id="reset" style="display: none;">   </p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
 
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
                        
                                         </div>
            </div>

                
                <!-- ----------------------------CALENDAR----BODY-------------------------- -->
                         
			      <div class="calendar-wrap">
			      	
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
                      
                      
			      </div>
                        
    

                        
            <div class="footer-logo">
                <img src="images/logo.png" style="    width: 14vw;margin-right: 2vw;">
                <div id="mainnotes" style="margin-top: 1vh;"></div>
            </div>
            
    
        </section>



        <!-- <h1 class="center" id="big" >
            THIS SITE WORK ONLY WITH BIG SCREENS
        </h1>
         -->


         </body>

       <script>
    //     $(document).ready(function(){
    //       $("#out").slideDown(300).delay(5000).slideUp(300);
    // });
      
        window.addEventListener("load", () => {

const loader = document.querySelector("#out");


loader.classList.add("loader-hidden");

loader.addEventListener("transitionend", () => {

document.body.removeChild("#out");



 })
 })
    </script>
 
    
    
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script >
         var even =' <?php echo  json_encode($activities)?>';
         var event = JSON.parse(even);

    //   console.log(event[0].title);
      
      
      

       (function($) {

    
    
     
    
	"use strict";

	document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag  =["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"],
        
//       -----------------------------------------------------------------------------
        
         MainDays=[
  "Happy New Year 2023!",
  "", //--------------------------FEBRUARY
  "International Woman's Day",
  "World Earth Day",
  "Mental Health Awarness Month",
  "World Enviroment Day",
  "World Chocolate Day",  
 "", //--------------------------AUGUST
 "",  //-------------------------SEPTEMBER
 "Breast Cancer Awareness",
 "Prostate Cancer Awareness",
 "Christmas Day"],
 
 //       -----------------------------------------------------------------------------

//         montevent=[
            
             
//             //-----------1-2-3--------------------
// //            January=
            
//             ["*The Performance and Development  Planning Conversation helps colleagues and managers align on goals, leadership commitments, and  development actions. *Year-end  Compensation planning is an essential part of  our pay-for-performance philosophy.",
//                      "1 Jan: New Year","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","17 Jan: International Mentoring Day","","","",
                     
//                      "","","","","",
//                      "","","","","",
//                      "31 Jan: *Year End Compensation "
//                     ],
        
// //            February=
            
//             ["*Ongoing Conversations help to provide in-the-moment feedback and coaching to support our colleagues’ success.",
//                      "","","","  World Cancer Day","  *Goal Setting Sessions -  for Mangers | Individual contributors ",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      " Saudi Founding Day Celebration","    Saudi Founding Day Public Holiday","","","",
//                      "","","","","",
//                      ""
//                     ],
        
// //            March=
            
//             ["*Ramadan Office Working Hours 10am to 4pm",
//                      "  Women’s History Month","",""," World Obesity Day - World Engineering Day","",
//                      "",""," International Women’s Day – Townhall [TBC]","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      ""," *Commencement of Holy Month of Ramadan","","","",
//                      "","","","","",
//                      ""
//                     ],
//             //-----------4-5-6--------------------
// //            April=
            
//             ["No Notes for April",
//                      "","  Quarterly Townhall – By Business Vertical"," Petromin KSA Ramadan Iftar Event (Jeddah / Riyadh / Dammam)",".",".",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","  Eid Al-Fitr Holiday",
                     
//                      ".","  World Earth Day ",".",".",".",
//                      ".",".","","","  Leadership Roadshow – UAE | Egypt [TBC]",
//                      ""
//                     ],
        
// //            May=
//             ["No Notes for May",
//               "  Mental Health Awareness Month &  Diversity and Inclusion Training Month ","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "  World Day for Cultural Diversity for Dialogue and Development","","","","",
//                      "","","  Year-end promotions - Communicate Promotions  effective 1 Jun","","",
//                      ""
             
                    
//                     ],
// //            June=
//             ["*The Mid-year Conversation provides an  update on progress, highlighting  actions to take going forward and  exchanging meaningful feedback. ",
//                      "1 Jun– 30 Jun : *Mid-Year Reviews ","","","","5 Jun: World Environment  Day",
//                      ".","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "21 Jun: International Day of  Yoga","","","","25 Jun – 29 Jun : Eid Al Adha Holiday",
//                      ".",".",".",".","",
//                      ""
                   
//                     ],
//             //-----------7-8-9--------------------
// //            July=
//                     ["No Notes for July",
//                      "","2-13 Jul: Quarterly Townhall – By Business Vertical","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
//                      ""
//                     ],
        
// //            August=
//             ["*Career Planning Conversation is a  checkpoint to discuss career goals and  aspirations.",
//                      "Aug-30 Sept: *Career Planning ","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","31 Aug: Kids @ Work Day | ","",
//                      "" ],
            
// //            Septembe=
//             [ "No Notes for September",
//                      "","","","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "","","23 Sep: KSA National Day","24 Sep: KSA National Day Public Holiday" , "  25 Sep: KSA National Day Celebration",
//                      ".","","","","",
//                      ""
//                     ],
//             //-----------10-11-12--------------------
// //            October=
//             [ "No Notes for October",
//                      "1 Oct: Breast Cancer Awareness Month" , "","","","",
//                      "","","","" , "10 Oct: World Mental Health Day",
                     
//                      "", "1-12 Oct: Quarterly Townhall – By Business Vertical" , "","","",
//                      "","","","","",
                     
//                      "","","","","",
//                      "","","","","",
//                      ""
//                     ],
        
// //            November=
//         ["No Notes for November",
//                      "1 Nov: Men’s Health Awareness Month","","","","",
//                      "","","","","",
                     
//                      "","","","14 Nov: World Diabetes Day","",
//                      "","","","19 Nov: International Men’s Day","",
                     
//                      "","","","","",
//                      "","","","","",
//                      ""
//                     ],
        
// //            December=
//         ["The Year-end Conversation is broken into the  Assessment period (Nov.-Dec.) and  Performance conversation (Jan.-Feb). During  the Assessment, People Leaders should review  ongoing feedback and objectively assess  Performance. ",
//                      "","","","","",
//                      "","","","","1 Nov-10 Dec: *Year-End ",
                     
//                      "","","","","",
//                      "","","","","",
                     
//                      "","","","","25 Dec: Christmas Day",
//                      "","","","","",
//                      ""
//                     ]
            
//         ],
        
        
//       -----------------------------------------------------------------------------
          im=["/themes/images/MONTES-IMAGES/JANUARY.png",
       "/themes/images/MONTES-IMAGES/FEBRUARY.png",
       "/themes/images/MONTES-IMAGES/MARCH.png",
       "/themes/images/MONTES-IMAGES/APRIL.png", 
       "/themes/images/MONTES-IMAGES/MAY.png",
       "/themes/images/MONTES-IMAGES/JUNE.jpg",
       "/themes/images/MONTES-IMAGES/JULY.jpg", 
        "/themes/images/MONTES-IMAGES/AUGUST.jpg",
       "/themes/images/MONTES-IMAGES/SEPTEMBER.png",
       "/themes/images/MONTES-IMAGES/OCTOBER.png", 
        "/themes/images/MONTES-IMAGES/NOVEMBER.png",
       "/themes/images/MONTES-IMAGES/DECEMBER.jpg"] ,
        IM2=[
               "/themes/images/jan.jpg"
                , "/themes/images/feb.jpg"
                , "/themes/images/mar.jpg"
                , "/themes/images/apr.jpg"
                , "/themes/images/may.jpg"
                , "/themes/images/jun.jpg"
                , "/themes/images/jul.jpg"
                , "/themes/images/augu.jpg"
                , "/themes/images/sept.jpg"
                , "/themes/images/octo.jpg"
                , "/themes/images/novem.jpg"
                , "/themes/images/decem.jpg"
        ],
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        eventslist = document.getElementsByTagName('li'),
        eventslistspan=   document.getElementsByTagName('span'),
         selectedDay,
        setDate,
        daysLen = days.length;
        
        
        
        
        
            
 //       -----------------------------------------------------------------------------

     let   montevents=[
            
             
            //-----------1-2-3--------------------
//            January=
            
            ["*The Performance and Development  Planning Conversation helps colleagues and managers align on goals, leadership commitments, and  development actions. *Year-end  Compensation planning is an essential part of  our pay-for-performance philosophy.",
                     "1 Jan: New Year","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     " "
                    ],
        
//            February=
            
            ["*Ongoing Conversations help to provide in-the-moment feedback and coaching to support our colleagues’ success.",
                     "","","","  y","    ",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     " ","","","","",
                     "","","","","",
                     ""
                    ],
        
//            March=
            
            ["*Ramadan Office Working Hours 10am to 4pm",
                     "","","","  ","",
                     "",""," ","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     ""," ","","","",
                     "","","","","",
                     ""
                    ],
            //-----------4-5-6--------------------
//            April=
            
            ["No Notes for April",
                     ""," ","",".",".",
                     "","","","","",
                     
                     "","","","","",
                     "","","",""," ",
                     
                     ".","   ",".",".",".",
                     ".",".","","","   ",
                     ""
                    ],
        
//            May=
            ["No Notes for May",
               "   ","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","  ","","",
                     ""
             
                    
                    ],
//            June=
            ["*The Mid-year Conversation provides an  update on progress, highlighting  actions to take going forward and  exchanging meaningful feedback. ",
                     "","","","","",
                     ".","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     ".",".",".",".","",
                     ""
                   
                    ],
            //-----------7-8-9--------------------
//            July=
                    ["No Notes for July",
                     ""," ","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            August=
            ["*Career Planning Conversation is a  checkpoint to discuss career goals and  aspirations.",
                     "  ","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","  ","",
                     "" ],
            
//            Septembe=
            [ "No Notes for September",
                     "","","","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     
                     "",""," "," " , "",
                     ".","","","","",
                     ""
                    ],
            //-----------10-11-12--------------------
//            October=
            [ "No Notes for October",
                     " " , "","","","",
                     "","","","" , " ",
                     
                     "", " " , "","","",
                     "","","","","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            November=
        ["No Notes for November",
                     " ","","","","",
                     "","","","","",
                     
                     "","",""," ","",
                     "","",""," ","",
                     
                     "","","","","",
                     "","","","","",
                     ""
                    ],
        
//            December=
        ["The Year-end Conversation is broken into the  Assessment period (Nov.-Dec.) and  Performance conversation (Jan.-Feb). During  the Assessment, People Leaders should review  ongoing feedback and objectively assess  Performance. ",
                     "","","","","",
                     "","","",""," ",
                     
                     "","","","","",
                     "","","","","",
                     
                     "","","",""," ",
                     "","","","","",
                     ""
                    ]
            
        ];
        
        
//       -----------------------------------------------------------------------------
// options should like '2014-01-01'
      //---------------------------------------------------------------------------------------------
      
    function DisplayEvents  (num) {
         
          //---------------------
          let length = event.length;
           let x= parseInt(0);
          let y= parseInt(1);
           let d =0;
          for (x  ; x <length ; x++)
              {
//   let mont = parseInt( event[x].month) ;
              d =  parseInt(  event[x].day);
              if( event[x].month == num+1)
              {
              montevents[num ][d]= event[x].title;
              }
              
    }
 
//  console.log(day);
//   console.log(da);
 
//---------------------
      };
    //----------------------------------------------------------------------------------------
    
    


    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }
    
    Calendar.prototype.draw  = function() {
        
         DisplayEvents(month);
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');
            if (year<2025){
            pre[0].addEventListener('click', function(){that.preMonth(); });
            next[0].addEventListener('click', function(){that.nextMonth(); });
            reset.addEventListener('click', function(){that.reset(); });
            }
         else if (year >= 2025){
            next.style='dispaly:none';
        }
        while(daysLen--) {
            days[daysLen].addEventListener('click', function(){that.clickDay(this); });
        }
    };
    
    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month'),
            headMonth2 = document.getElementsByClassName('head-month2');
 DisplayEvents(month);
        if (year<2025){
            e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] +" - " + year; 
            headMonth2[0].innerHTML = monthTag[month]  ;
          }
          document.getElementById('notes').innerHTML = montevents[month][0];
                   document.getElementById('mainnotes').innerHTML = MainDays[month];

            document.getElementById("naser").style ="background-image:url(" +(IM2[month]) + ")";
        console.log(month%2);
        if (month != 0 && month % 2 != 0){
            headMonth2[0].style ="color:#F58320";
             
             document.getElementById("morebtn").style ="background: #F58320;";
            
            
//            document.getElementById("foundingdayman").style ="background-image:url(themes/images/foundingday-icons/foundingday-man.png)";
//            document.getElementById("foundingdaylogo").style ="background-image:url(themes/images/foundingday-icons/foundingday-logo-light.png)";
 
        }else{
            headMonth2[0].style ="color:#cf2031 ";
             document.getElementById("foundingdayman").style ="background:none";
             document.getElementById("foundingdaylogo").style ="background:none";
             document.getElementById("morebtn").style ="background: #cf2031";
         }
          if (month == 3){
              document.getElementById("monthesnames").style ="width: 42vw";
              document.getElementById('contentbod').style="width:55vw;"

          }
          if(month !== 3){
               document.getElementById("monthesnames").style ="width: 52vw";
          }
       
     };
        
    Calendar.prototype.DisplayImage =function (x) {
          DisplayEvents(month);
            document.getElementById("naser").style ="background-image:url(" +(im[x]) + ")";
      };
// --------------------------------------------------------------------------------------------------------
    Calendar.prototype.drawDays = function() {
        
        
        
        if (year<2025){
 
        var startDay = new Date(year, month, 1).getDay(),
//      下面表示这个月总共有几天
            nDays = new Date(year, month + 1, 0).getDate(),
             noon=0,
            n = startDay;
//      清除原来的样式和日期
        for(var k = 0; k <42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
//            eventslist[k].innerHTML='';
        }
            
       for(var m = 0; m <6; m++) {
           
            eventslist[m].innerHTML = '';
       eventslistspan[m].innerHTML='';
           eventslistspan[m].style="display:none";

            
        }

        for(var i  = 1; i <= nDays ; i++) {
            
            if( montevents[month][i]!==""){
                // days[n].id = "evented";   //-------------------------------------------------------------------evented
                
              //  event.forEach(function (even) {
    
  //  if (even[1].month == month){
                
               if( montevents[month][i]!=="."){
                    
                    
                eventslist[noon].style="display:flex";
                eventslistspan[noon].style="display:inline-block ; tecxt-align:center";
                    eventslistspan[noon].innerHTML=i;
//                    if(i<10){
//                        eventslistspan[noon].style="padding-left :9px";
//                    } else if(i>9){
//                         eventslistspan[noon].style="padding-left: 2px";
//                    }
                    
                eventslist[noon].innerHTML//=event[month].title;
              =  montevents[month][i];
//                    eventslist[noon]=i;
            noon++;
            }
           }
            
             days[n].innerHTML = i; 
            n++;
            
        }
            
        
        for(var j = 0; j < 42; j++) {
            if(days[j].innerHTML === ""){
                
                days[j].id = "disabled";
                
            }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                    this.drawHeader(day);
                    days[j].id = "today";
                }
            }
            if(selectedDay){
                if((j === selectedDay.getDate() + startDay - 1)&&(month === selectedDay.getMonth())&&(year === selectedDay.getFullYear())){
                days[j].className = "selected";
                this.drawHeader(selectedDay.getDate());
                }
            }
        }
        }
        
    };
    
    Calendar.prototype.clickDay = function(o) {
        var selected = document.getElementsByClassName("selected"),
            len = selected.length;
        if(len !== 0){
            selected[0].className = "";
        }
        o.className = "selected";
        selectedDay = new Date(year, month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);
        
    };
    
    Calendar.prototype.preMonth = function() {
             
        if(month < 1 && year > 2023  ){ 
            month = 11;
            year = year - 1; 
        }else { if(year > 2022 && month !== 0){
            month = month - 1;
        
        }
        }
                 this.DisplayImage(month);

        this.drawHeader(1);
         DisplayEvents(month);
        this.drawDays();
    };
    
    Calendar.prototype.nextMonth = function() {
 
        if(month >= 11 &&  year <= 2024){
            month = -1;
            year =  year + 1; 
        }else { if(year <= 2024 && month !== 11){
            month = month + 1;
        }
               else return 0;
       
         this.DisplayImage(month);
         
        this.drawHeader(1);
         DisplayEvents(month);
        this.drawDays(); }
    };
    
    Calendar.prototype.getOptions = function() {
        if(this.options){
            var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1]-1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
        }
    };
    
     Calendar.prototype.reset = function() {
         month = today.getMonth();
         year = today.getFullYear();
         day = today.getDate();
         this.options = undefined;
         this.drawDays();
     };
    
    Calendar.prototype.setCookie = function(name, expiredays){
        if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
        }else{
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };
    
    Calendar.prototype.getCookie = function(name) {
        if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
                nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1,c.length);
                    
                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay =  new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();
    
        
}, false);
    
   

})(jQuery);

  </script>
  
           <style>
             
             
                     @font-face {
  font-family: myFirstFon;
  src: url(fonts/Gotham-Font/Gotham-Light.otf);
}                     @font-face {
  font-family: boldgotham;
  src:  url(fonts/Gotham-Font/Gotham-Bold.otf);
}

span, h1 {
  font-family: myFirstFon;
             }
    *{
                box-sizing: border-box;
                user-select: none;
                transition: all .5s;
            }
            
            body{
                margin: 0;
                padding: 0;
                font-family:myFirstFon;
                color: #444;
/*                background: url(fonts/Gotham-Font/Gotham-Bold.otf)*/
          
                
            }
            
            .wrap-srction {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50% , -50%);
                height: 98vh;
                width: 92vw;
                background-color:white;
                box-shadow: 0  10px 30px  rgba(0,0,0,0.5);
/*                display:flex;*/
                overflow: hidden;
                background-size: cover;
                 background-repeat: no-repeat;
                overflow: hidden

            }
            .content {
    width: calc(60% - 50px);
    height: 100%;
    background-color: transparent;
    padding: 0 3%;
    line-height: 1.5em;
    font-size: 18px;
    text-align: -webkit-match-parent;
    margin: -1px -4px -1px -1px;
    position: absolute;
    right: 0;
    display: inline-table;
    text-align: left;
}
     .content h1 {
    font-size: 7vw;
    /* height: 32.4%; */
    letter-spacing: 1vw;
    position: relative;
    width: 55vw;
    z-index: 11;
    margin: 0  0 0 auto;
    padding: 0 auto;
    /* left: 1.7vw; */
    font-weight: normal;
    font-style: italic;
    border-bottom: 2px solid #CF2031;
    /* border-image: linear-gradient(to left , #D02128, rgba(0,0,0,0) ); */
    text-align: -webkit-center;
    /* padding-top: 8vh; */
    line-height: 35.7vh;
    color: #CF2031;
}
             h4{
                     color: #CF2031;
                 letter-spacing: 2px;
                     /*padding-left: 20px;*/
                 font-style: italic;
                 font-family:myFirstFon;
                     font-weight: bold;



             }
             
            .contentbody {
    padding-left:41%;
    margin-top: 4vh;
}
             
p {
    font-size: x-small;
    line-height: normal;
    width: 42%;
    margin-left: 6.4vw;
    position: absolute;
    bottom: 1vh;
    font-family: boldgotham;
    color: #CF2031;
}       
   
   
   .morebtn {
    position: absolute;
    width: 10vw;
    height: 2.4vw;
    background-color: #F58320;
    outline: 0;
    border: 2px solid #fff;
    border-radius: 2vw;
    color: #fff;
    left: 10vw;
    top: 4vh;
    font-family: boldgotham;
    font-size: 1vw;
    letter-spacing: 1px;
    text-align: center;
    line-height: 1vw;
    /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 5px; */
}         
         
/*.morebtn {*/
/*    position: absolute;*/
/*    width: 10vw;*/
/*    height: 2vw;*/
/*    background-color: transparent;*/
/*    outline: 0;*/
/*    border: 2px solid #F58320;*/
/*    border-radius: 2vw;*/
/*    color: #F58320;*/
/*    right: 16vw;*/
/*    bottom: 11vh;*/
/*    font-family: boldgotham;*/
/*    font-size: 1vw;*/
/*    letter-spacing: 1px;*/
/*    text-align: center;*/
/*    line-height: 1vw;*/
/*    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 5px;*/
/*}*/
             button:focus {
    outline: 1px dotted;
    outline: 5px auto #F58320;
}
            .morebtn:hover{
                 transform: scale(0.95);
                outline: 0;
                 
}
          .imageb#ox {
/*    left: 23vw;*/
/*    width: calc(50% + 50px);*/
    height: 100%;
    background-color:goldenrod;
    border-top: 4px #fff solid;
/*    transform: skew(31deg);*/
    z-index: -1;
    position: relative;
}
            
     .imageboxheade#r {
    height: 43vh;
    background: #D02128;
    transform: skew(45deg);
    position: absolute;
    left: 8.6vw;
    top: -14px;
    width: 94vw;
    z-index: -2;
}
.imageboxheader #2 {
    border-left: 48vw transparent solid;
    border-top: 96vh solid #fff;
    height: 96vh;
    background: transparent;
    /* transform: skew(33deg); */
    position: absolute;
    right: 0;
    /* top: -14px; */
    max-width: 87vw;
    z-index: -1;
    width: 82vw;
}       
            .imageboxbody {
    height: 57vh;
    background: green;
     position: absolute;
    right: -24vw;
    bottom: -14px;
    width: 90vw;
    z-index: -1;
}
            .imageboxbody2 {
    height: 57vh;
    background: #fff;
    transform: skew(33deg);
    position: absolute;
    right: -24vw;
    bottom: -14px;
    width: 90vw;
    z-index: -1;
/*                background: url()*/
}
           
/*       ----------------------------------      */
             
             .wrap-srction:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
/*    background: #000;*/
/*---------------------------------------*/
/*
                 background:linear-gradient(-90deg ,#f00 ,#0ff, #ff0,#fff,#000 ,#ff0,#fff,#000);
				 background-size:400% 400%;
                 animation:change 10s ease-in-out infinite;
*/
/*---------------------------------------*/
     opacity: 0.5;
    z-index: -3;
}
/*             -------------------------------------------------- */
             
             
/*
               
			 @keyframes change {
				 0%{
				 background-position:left bottom;
				 transform:rotate(5deg);
				 }
				 25%{
				 background-position:left top;
				 transform:rotate(-10deg);
				 }
				 75%{
				 background-position:right bottom;
				 transform:rotate(-15deg);
				 }
				 100%{
				 background-position:right top;
				 transform:rotate(5deg);
				 }
			 }
*/
             
             @keyframes change{
				0%{
					background-position: 50% 50%;
				}10%{
					background-position: 40% 40%;
				}20%{
					background-position: 30% 30%;
				}30%{
					background-position: 20% 20%;
				}40%{
					background-position: 10% 10%;
				}
/*
				50%{
					background-position:100% 50%;
				}
*/
/*
				100%{
					background-position:0  50%;
				}
*/
				
				50%{
					background-position:20% 100%;
				}
				60%{
				background-position:10% 0%;
					
				}
				70%{
					background-position:25% 0;
				}
				80%{
					background-position: 50% 0;
				}
				90%{
					background-position: 80% 0;
				}
				100%{
					background-position: 100% 10%;
				}
				
			}
		
             
/*             -------------------------------------------------- */
            .calendar-wrap {
    width: 35%;
    background: rgba(255,255,255,0.0);
    padding: 10px 0 0 30px;
    color: #fff;
    position: absolute;
    bottom: 14vh;
    font-weight: bold;
                font-family: myfirstfon;
}
             
             
    .button-wrap .pre-button i, .button-wrap .next-button i {
    color: #fff;
}         
             
             th {
    text-align: inherit;
    color: #fff;
    font-size: smaller;
    font-weight: 100;
}
             
              #calendar tr {
    height: 2.5em;
}
             
             tbody td:hover:after, .selected:after {
    background:#F58320 ;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px;
                 
}
#today:after {
    background: #F58320;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 5px;
}
             
             tbody tr {
    color: #fff;
}
             .wrap-header:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background: transparent;
    opacity: .5;
    z-index: -1;
}
             
             #disabled {
    cursor: default;
    background: none;
}
             #disabled:hover {
    background: none;
    color: #c9c9c9;
}
             #today {
    color: #fff;
                 font-size: 20px;
}
             tbody td {
    width: 15%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    position: relative;
    z-index: 0;
        text-shadow: 1px 2px 3px gray;
}
             
             tbody td:after {
    position: absolute;
    top: 50%;
    left: 7px;
    right: 0;
    bottom: 0;
    content: '';
    width: 34px;
    height: 34px;
    margin: 0 0 0 -13px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    border-radius: 50%;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    z-index: -1;
}
             
           .head-day, .head-month, .head-info {
    background: transparent;
    color: #fff;
    display: none;
}
             
             .head-day {
    font-size: 4em;
    line-height: 1;
    color: #fff;
    margin-left: 40px;
                 text-shadow: 1px 1px 2px gray;


}
             .head-month{
       margin-left: -15px;
       font-size: 0.7em;
                 text-shadow: 1px 1px 2px gray;


             }             
.wrap-header {
    position: absolute;
    width: fit-content;
    z-index: 12;
    background: transparent;
    top: 22vh;
    left: -13.6vw;
}
           .button-wrap {
    position: relative;
    padding: 10px 0;
    left: 13.7vw;
} 
             
   .footer-logo {
    position: absolute;
    bottom: 4vh;
    left: 3vw;
    color: #fff;
    font-size: xx-large;
    font-weight: bold;
    font-family: boldgotham;
    font-style: italic;
    text-shadow: 1px 2px 3px gray;
    display: -webkit-box;
}
             
             ul {
  display: block;
  list-style-type: disc;
  margin-top: 1em;
  margin-bottom: 1 em;
  margin-left: 0;
  margin-right: 0;
  padding-left: 40px;
                 font-family: boldgotham;
}
             
             .contentbody li{
                 color:#CF2031;
                 display: none;
                 line-height: 35px;
                 font-size:medium;
                 font-family: boldgotham;
             }
            span {
    background: #F58320;
    color: #000;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    position: absolute;
    /* top: 0%; */
    left: 40%;
    /* right: 0; */
    /* bottom: 0; */
    margin-top: 4px;
    display: none;
  text-align: center;
    color: #fff;
    font-size: larger;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 5px;
    padding:1px;
}
/*         -----------------------------------------    */
             
             #foundingdayman {
    width: 28vw;
    height: 56vh;
    position: absolute;
    z-index: -1;
    bottom: 0;
    background-size: cover;
     left: 0vw;
 }
               #foundingdaylogo {
    width: 12vw;
    height: 25vh;
    position: absolute;
    z-index: -1;
    top: 18vh;
    background-size: cover;
    left: -26vw;
 
 }
   .button-wrap {
    position: absolute;
    padding: 10px 0;
    z-index: 211;
    top: 48vh;
    width: 100vw;
       left: auto;}
             
             .button-wrap .pre-button i, .button-wrap .next-button i {
    color: #D02128;
    font-size: xx-large;
} 
             
             
              .button-wrap .next-button:hover i {
    background: #D02128;
    color: #fff;
    font-size: large;
        padding: 10px;
    border-radius: 0px 10px 10px 0px;
}


 
             .button-wrap .pre-button:hover i  {
    background: #D02128;
    color: #fff;
    font-size: large;
        padding: 10px;
    border-radius: 10px 0px 0px 10px;
}
             thead{
                  font-family: boldgotham;
             }



 @media  only screen and (max-width:1000px){
    
 }
/*
     --------------------------------------------------
*/
        #out{
                position: absolute;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(to left , #F0B43C , #D02128);
    z-index: 11;
}
         #loader {
            border: 12px solid #f3f3f3;
            border-radius: 50%;
            border-top: 12px solid #F0B43C;
            background: linear-gradient(to left , #F0B43C , #D02128);
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
            z-index: 11;
        }
 
        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
 
        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
        .loader-hidden{
        visibility: hidden;
        display: none;}
             
             
             #big{
                 display: none;
}
/*              
              @media only screen and (min-width: 1110px) {
                 section    {
                     display: block;
                     
                 }  
                 
               #big {
    display: none;
    color: #fff;
    font-size: 7vw;
    text-align: center;
    top: 30vh;
    z-index: 0;
}
                 .button-wrap {
    position: absolute;
    padding: 10px 0;
    z-index: 211;
    top: 48vh;
    width: 100vw;
    left: auto;
    display: block;
}
}
             
             @media only screen and (max-width: 1100px) {
                 section    {
                     display: none;
                     
                 }  
                 
                 
#big {
    display: block;
    color: #fff;
    font-size: 7vw;
    text-align: center;
    padding-top: 20vh;
    z-index: 12;
    background: linear-gradient(to left , #F0B43C , #D02128);
}
                 #out {
    position: absolute;
    height: 100vh;
    width: 100vw;
     background: transparent; 
    z-index: 13;
}
                 
                 .loader-hidden {
    visibility: visible;
    display: block;
}
                 .button-wrap {
    position: absolute;
    padding: 10px 0;
    z-index: 211;
    top: 48vh;
    width: 100vw;
    left: auto;
    display: none;
}
}          */
            
    </style>
      
      <style>
          @media only screen and (max-width: 1150px) {
              
              
              
              
          }

      </style>
   
</html>