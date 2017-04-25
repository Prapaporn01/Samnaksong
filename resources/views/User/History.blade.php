@extends('site.layoutforuser')
@section('menutop')
<style type="text/css">
    .breadcrumb {
    padding: 0px;
    background: #D4D4D4;
    list-style: none; 
    overflow: hidden;
    margin-top: 0px;
}
.breadcrumb>li+li:before {
    padding: 0;
}
.breadcrumb li { 
    float: left; 
}
.breadcrumb li.active a {
    background: brown;                   /* fallback color */
    background: #cc9966 ; 
}
.breadcrumb li.completed a {
    background: brown;                   /* fallback color */
    background: hsla(153, 57%, 51%, 1); 
}
.breadcrumb li.active a:after {
    border-left: 30px solid #cc9966 ;
}
.breadcrumb li.completed a:after {
    border-left: 30px solid hsla(153, 57%, 51%, 1);
} 

.breadcrumb li a {
    color: #080808;
    text-decoration: none; 
    padding: 10px 0 10px 45px;
    position: relative; 
    display: block;
    float: left;
}
.breadcrumb li a:after { 
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
    border-bottom: 50px solid transparent;
    border-left: 30px solid hsla(0, 0%, 83%, 1);
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    left: 100%;
    z-index: 2; 
}   
.breadcrumb li a:before { 
    content: " "; 
    display: block; 
    width: 0; 
    height: 0;
    border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
    border-bottom: 50px solid transparent;
    border-left: 30px solid white;
    position: absolute;
    top: 50%;
    margin-top: -50px; 
    margin-left: 1px;
    left: 100%;
    z-index: 1; 
}   
.breadcrumb li:first-child a {
    padding-left: 15px;
}
.breadcrumb li a:hover { background: #cc9966  ; }
.breadcrumb li a:hover:after { border-left-color: #cc9966   !important; }
</style>

<body>    
          
            <div class="container">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/')}}" style="font-size:18px;"><fontTh>กลับสู่หน้าหลัก</fontTh></a></li>
                      <li class="active"><a href="javascript:void(0);" style="font-size:18px;"><fontTh>ประวัติสำนักสงฆ์</fontTh></a></li>
                  </ul>          
            </div>

</body>
@stop




@section('content')
<head>
    <title>NewUser</title>
</head>
<style>
/*-------------------------------------------gallery*/
    ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
        list-style:none;
        margin-bottom:0px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }

 body{
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-image: url({{ url('images/bg1.jpg')}});
}

hr.style2 {
    border-top: 7px double #cc99ff;
}
</style>


<body> 

                  <div class="col-md-12 col-xs-10" >
                    <br>
                    <br>
                    <br>
                    <center style="color:#330033; font-size:24px;"><b><fontTh>ประวัติสำนักสงฆ์สิริมงคล</fontTh></b></center>             
                    <hr class="style2">
                    <br> 
                     <img class="img-responsive" src="{{asset('images/resizeBig/Gallerymain_SmeyJlCzGk.jpg')}}" style="margin-left:5%;">
                     <br>
                     <hr class="style2">
                     <br>
                     <div style="background-color:#ffccff">
                       <fontTh><div style="font-size:18px;font-weight:bold;color:#333399;padding-top:15px;padding-left:10px;">ที่ตั้ง</div><div style="margin-left:15px;font-size:18px;color:black;">
                       สำนักสงฆ์สิริมงคล        ตั้งอยู่  ณ  บ้านแม่เตี๊ยะใต้  หมู่ที่  ๑๔  ต.สบเตี๊ยะ  อ.จอมทอง  จังหวัดเชียงใหม่</div></fontTh>
                     <br>
                       <fontTh><div style="font-size:18px;font-weight:bold;color:#333399;padding-top:10px;padding-left:10px;">พระภิกษุและสามเณร</div><div style="margin-left:15px;font-size:18px;color:black;padding-bottom:15px;">
                       มีพระภิกษุ  ๑  รูป   สามเณร   ๕  รูป</div></fontTh>
                     
                     </div>
                     <br>
                     <div style="background-color:#ffcccc;">
                      <fontTh><div style="font-size:18px;font-weight:bold;color:#333399;padding-top:15px;padding-left:10px;">ประวัติการก่อตั้ง</div>
                        <div style="margin-left:15px;font-size:18px;color:black;background-color:#ffcccc;">
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บ้านแม่เตี๊ยะใต้  หมู่ที่  ๑๔ แต่เดิมไม่มีวัดในหมู่บ้าน  จึงได้เริ่มทำการก่อตั้งที่พักสงฆ์สิริมงคลขึ้นเมื่อ  วันจันทร์ ที่ ๗ พฤศจิกายน  ๒๕๕๔   โดยมีผู้มีจิตศรัทธาได้ถวายที่ดินและซื้อที่ดินถวายดังนี้
                        </div>
                    
                        <div style="margin-left:50px;color:black;font-size:18px;">1.  คุณอินสน   บุตรต๊ะ  จำนวน  ๓  ไร่   ๓  งาน </div>
                        <div style="margin-left:50px;color:black;font-size:18px;">2.  คุณทวี  คุณแสงทอง  เขียวอินต๊ะ  จำนวน ๒   งาน</div>
                        <div style="margin-left:50px;color:black;font-size:18px;">3.  อ.ทอน เขียวกันยะ  อ.ทองอินทร์ เขียวกันยะ พร้อมครอบครัว  จำนวน  ๑ งาน </div>
                        <div style="margin-left:50px;color:black;font-size:18px;">4.  คณะศรัทธาทั่วไปจัดผ้าป่าซื้อที่ดิน  จำนวน  ๑  ไร่  ๒  งาน  ๒๐  ตารางวา</div>
                      </fontTh>
                    
                        <div style="margin-left:25px;font-size:18px;color:black;"><fontTh>รวมที่ดินขอวัดมี   6  ไร่  ๑ งาน  20  ตารางวา</fontTh></div>


                        <div style="margin-left:25px;font-size:18px;color:black;margin-bottom:40px;">   <fontTh> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำนักสงฆ์สิริมงคล  มีท่านพระครูคัมภีรธรรม (ครูบาเจ้าบุญเป็ง   คฺมภีโร)  เป็นประธานสงฆ์  และพระนพปฎลวงศ์  คฺนธสีโล  เจ้าสำนักสงฆ์สิริมงคล รับมอบที่ดิน คณะศรัทธาผู้อุปัฏฐาก มีนายบุญตัน กาละวิน ผู้ใหญ่บ้าน หมู่ที่ ๑๔ และคณะศรัทธาบ้านแม่เตี๊ยะใต้ทุกหลังคาเรือน จำนวน  ๕๓  หลังคาเรือน </fontTh>
                        </div>

<div class="col-md-12">  
    <div class="col-md-5">
      <div style="font-size:18px;color:black;margin-bottom:40px;"><fontTh> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดิมชาวบ้านแม่เตี๊ยะใต้ เป็นศรัทธาของวัดทุ่งปูน ชึ่งมีพระครูคัมภีระธรรม (ครูบาเจ้าบุญเป็ง   คฺมภีโร) เป็นเจ้าอาวาส ชึ่งเป็นอาจารย์ของพระนพปฎลวงศ์ คนฺธสีโล  ครูบาเจ้าบุญเป็งได้เล็งเห็นว่า หมู่บ้านแม่เตี๊ยะใต้เป็นหมู่ที่ห่างไกลจากวัดทุ่งปูน การเดินทางยังไม่สะดวก ครูบาเจ้าจึงได้มีความเมตตามอบหมายให้พระนพปฎลวงศ์ คนฺธสีโล มาเริ่มหาที่ดินในการก่อสร้างวัด โดยมีผู้ใหญ่บ้านคือ นายบุญตัน กาละวิล พร้อมด้วยคณะศรัทธาบ้านแม่เตี๊ยะใต้ คอยอุปัฏฐากช่วยเหลือ</fontTh>
      </div>
    </div>
    <div class="col-md-7" style="margin-bottom:40px;">
      <img class="img-responsive" src="{{asset('images/History/P3120831.JPG')}}" ><br>
      <img class="img-responsive" src="{{asset('images/History/P3130876.JPG')}}" >
    </div>
</div>

<div style="margin-left:25px;font-size:18px;color:black;margin-bottom:20px;"><fontTh> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันจันทร์  ที่ 31  ตุลาคม  2554 ขึ้น 5 ค่ำ เดือนยี่ ชาวบ้านแม่เตี๊ยะใต้ ได้ทำหนังสือถึงคณะสงฆ์อำเภอจอมทอง และได้รับการอนุมัติจากคณะสงฆ์ให้สร้างวัดได้</fontTh></div>



<div class="col-md-6"><img class="img-responsive" src="{{asset('images/History/PB200027.JPG')}}" >
</div>

<div class="col-md-6" style="margin-bottom:20px;"><img class="img-responsive" src="{{asset('images/History/PB200119.JPG')}}" >
</div>



<div style="margin-left:25px;font-size:18px;color:black;margin-bottom:20px;margin-top:20px;"><fontTh> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันจันทร์  ที่  7  พฤศจิกายน  2554  ขึ้น 12 ค่ำ เดือนยี่ เป็นวันที่เริ่มทำการก่อสร้างวัดโดยมีพระภิกษุสามเณร ชาวบ้านแม่เตี๊ยะใต้และหมู่บ้านใกล้เคียง ได้ร่วมกันบริจาคทุนทรัพย์ตามจิตศรัทธา  และเสียสละแรงกายจำนวน  7  วัน ในการเริ่มลงมือทำการปรับแต่งพื้นที่  กำหนดสถานที่สร้างกุฏิมุงคา  1  หลัง  ห้องน้ำ ห้องสุขา  จำนวน  3  ห้อง โดยพระนพปฎลวงศ์ คนฺธสีโล ได้ตั้งวัดชื่อว่า “วัดสิริมงคล” </fontTh></div>

<div style="margin-left:25px;font-size:18px;color:black;margin-bottom:20px;padding-bottom:15px;"><fontTh> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันจันทร์ ที่ 5 ธันวาคม  2554 พ่อหลวงบุญตัน กาลวิน พร้อมด้วยคณะศรัทธาบ้านแม่เตี๊ยะใต้ได้นิมนต์พระนพปฎลวงศ์ คนฺธสีโล เข้ามาจำพรรษาโดยนิมนต์ครูเจ้าบุญเป็งเป็นประธานสงฆ์นั่งเฉลียงตั้งขบวนหามเข้าวัด นิมนต์พระสงฆ์  19 รูป สามเณร 9 รูป เจริญพระพุทธมนต์ คณะศรัทธามาร่วมงานจำนวนมาก ประกอบด้วย คณะศรัทธาบ้านแม่เตี๊ยะใต้และหมู่บ้านใกล้เคียง ตลอดจนโยมอุปัฏฐากที่รู้จักกัน  ได้ร่วมกันสร้างเสนาสนะถวายไว้ในพระบวรพุทธศาสนาเป็นวัดโล่ง(โปร่ง)  เมื่อได้ลงมือก่อสร้างตั้งแต่ปลายปี พ.ศ. 2554 เป็นต้นมา ทางวัดได้รับการสนับสนุนจากประชาชนจากที่ต่าง ๆ ร่วมกันสร้างเสนาสนะให้แก่วัดด้วยดีตลอดมา  </fontTh></div>
</div>
<div style="background-color:#ffcc99">
<fontTh><div style="font-size:18px;font-weight:bold;color:#333399;padding-top:15px;padding-left:10px;">การก่อสร้างเสนาสนะภายในวัด</div><div style="margin-left:40px;font-size:18px;color:black;">
- เริ่มมาอธิฐานจิตสร้างอาราม  วันจันทร์  ที่  31  ตุลาคม   2554  ขึ้น 5 ค่ำ  เดือนยี่<br>
- เริ่มสร้างที่พักอาศัย  วันจันทร์  ที่ 7 พฤศจิกายน  2554   ขึ้น  12  ค่ำ  เดือนยี่<br>
- เริ่มเข้ามาจำพรรษา  วันจันทร์  ที่  5  ธันวาคม  2554   ขึ้น  10 ค่ำ   เดือนสาม<br>
- เริ่มทำผ้าป่าสามัคคีซื้อที่ดินและหล่อรูปเหมือนอุดกริ่งครูบาเจ้าบุญเป็ง วันเสาร์  ที่  25  กุมภาพันธ์  พ.ศ.  2555<br>
- เริ่มก่อสร้างบำเพ็ญบุญคัมภีรธรรม วันเสาร์  ที่  5  พฤษภาคม  2555  เดือน  8  ขึ้น  15  ค่ำ<br>
- เริ่มก่อสร้างศาลาคนฺธสีโล  วันศุกร์ ที่   8  ตุลาคม  2556<br>
- เริ่มสร้างวิหารมณีรัตนะ  วันศุกร์  ที่  21  มิถุนายน  2556   <br>
- เททองหล่อพระพุทธสิริมงคลศรีศากยมุนี อาทิตย์ ที่ 19  พฤษภาคม 2556  เดือน 8 ขึ้น 10 ค่ำ<br>
- แห่พระพุทธสิริมงคลศรีศากยะมุนี(พระเจ้าเก้าติ้ว) เข้ามาประดิษฐาน  ณ วิหารมณีรัตนะ  อารามสิริมงคล  บ้านแม่เตี๊ยะใต้  หมู่ที่  14  ต.สบเตี๊ยะ  อ.จอมทอง  จ.เชียงใหม่   วันจันทร์  ที่ 22  กรกฎาคม 2556  ขึ้น  15 ค่ำ  เดือน  10  เหนือ  (วันอาสาฬหบูชา)  
- สร้างกุฎิอารามสิริมงคล  วันศุกร์  ที่  26  สิงหาคม  2556<br>
</div></fontTh>
<br><br>
               </div>
               
                     <br></div>

</body>
</html>
@stop