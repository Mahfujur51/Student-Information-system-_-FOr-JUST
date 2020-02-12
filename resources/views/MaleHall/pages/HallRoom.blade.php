@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_sidebar.html -->
    @include('MaleHall.inc.sidebar')
    <!-- partial -->
    <div class="content-wrapper">
      <div class="card card-body">
        <h2 class=" text-center card-header mb-4">North side</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">4th Floor</th>
              <td scope="col">
                @if ($student->room==509)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
                509
              </td>
              <td scope="col">
                @if ($student->room==508)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              508</td>
              <td scope="col">
                @if ($student->room==508)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              507</td>
              <td scope="col">
                @if ($student->room==506)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              506</td>
              <td scope="col">
                @if ($student->room==505)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              505</td>
              <td scope="col">
                @if ($student->room==504)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              504</td>
              <td scope="col">
                @if ($student->room==503)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              503</td>
              <td scope="col">
                @if ($student->room==502)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                
                @endif
                502
              </td>
              <td scope="col">
                @if ($student->room==501)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
                501
              </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">3rd Floor</th>
              <td scope="col">
                @if ($student->room==409)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              409</td>
              <td scope="col">
                @if ($student->room==408)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              408</td>
              <td scope="col">
                @if ($student->room==407)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              407</td>
              <td scope="col">
                @if ($student->room==409)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              406</td>
              <td scope="col">
                @if ($student->room==405)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>
                @endif
              405</td>
              <td scope="col">
                @if ($student->room==404)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              404</td>
              <td scope="col">
                @if ($student->room==403)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              403</td>
              <td scope="col">
                @if ($student->room==402)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
              402</td>
              @if ($student->room==401)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif <td scope="col">
            401</td>
          </tr>
          <tr>
            <th scope="row">2nd Floor</th>
            <td scope="col">
              @if ($student->room==309)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            309</td>
            <td scope="col">
              @if ($student->room==308)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            308</td>
            <td scope="col">
              @if ($student->room==307)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            307</td>
            <td scope="col">
              @if ($student->room==306)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            306</td>
            <td scope="col">
              @if ($student->room==305)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            305</td>
            <td scope="col">
              @if ($student->room==304)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            304</td>
            <td scope="col">
              @if ($student->room==303)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            303</td>
            <td scope="col">
              @if ($student->room==302)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            302</td>
            <td scope="col">
              @if ($student->room==301)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            301</td>
          </tr>
          <tr>
            <th scope="row">1st Floor</th>
            <td scope="col">
              @if ($student->room==209)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            209</td>
            <td scope="col">
              @if ($student->room==208)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            208</td>
            <td scope="col">
              @if ($student->room==207)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            207</td>
            <td scope="col">
              @if ($student->room==206)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            206</td>
            <td scope="col">
              @if ($student->room==205)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            205</td>
            <td scope="col">
              @if ($student->room==204)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            204</td>
            <td scope="col">
              @if ($student->room==203)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 
            203</td>
            <td scope="col">
              @if ($student->room==202)
              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 202</td>
              <td scope="col"> @if ($student->room==201)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 201</td>
              </tr>
              <tr>
                <th scope="row">Ground Floor</th>
                <td scope="col"> @if ($student->room==107)
                  <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 107</td>
                  <td scope="col"> @if ($student->room==106)
                    <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 106</td>
                    <td scope="col"> @if ($student->room==105)
                      <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 105</td>
                      <td scope="col"> @if ($student->room==104)
                        <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 104</td>
                        <td scope="col"> @if ($student->room==103)
                          <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 103</td>
                          <td scope="col"> @if ($student->room==102)
                            <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 102</td>
                            <td scope="col"> @if ($student->room==101)
                              <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 101</td>
                              <td colspan="2">Payer Room</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card card-body">
                        <h2 class="card-header text-center mb-4">West Side</h2>
                        <table class="table table-striped">
                          <tr>
                            <th>4th Floor</th>
                            <td> @if ($student->room==525)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 525</td>
                            <td> @if ($student->room==524)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 524</td>
                            <td> @if ($student->room==523)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 523</td>
                            <td> @if ($student->room==522)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 522</td>
                            <td> @if ($student->room==521)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 521</td>
                            <td> @if ($student->room==520)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 520</td>
                            <td> @if ($student->room==519)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 519</td>
                            <td> @if ($student->room==518)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 518</td>
                            <td> @if ($student->room==517)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 517</td>
                            <td> @if ($student->room==516)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 516</td>
                            <td> @if ($student->room==515)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 515</td>
                            <td> @if ($student->room==514)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 514</td>
                            <td> @if ($student->room==513)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 513</td>
                            <td> @if ($student->room==512)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 512</td>
                            <td> @if ($student->room==511)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 511</td>
                            <td> @if ($student->room==510)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 510</td>
                          </tr>
                          <tr>
                            <th>3rd Floor</th>
                            <td> @if ($student->room==425)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 425</td>
                            <td> @if ($student->room==424)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 424</td>
                            <td> @if ($student->room==423)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 423</td>
                            <td> @if ($student->room==422)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 422</td>
                            <td> @if ($student->room==421)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 421</td>
                            <td> @if ($student->room==420)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 420</td>
                            <td> @if ($student->room==419)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 419</td>
                            <td> @if ($student->room==418)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 418</td>
                            <td> @if ($student->room==417)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 417</td>
                            <td> @if ($student->room==416)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 416</td>
                            <td> @if ($student->room==415)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 415</td>
                            <td> @if ($student->room==414)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 414</td>
                            <td> @if ($student->room==413)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 413</td>
                            <td> @if ($student->room==412)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 412</td>
                            <td> @if ($student->room==411)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 411</td>
                            <td> @if ($student->room==410)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 410</td>
                          </tr>
                          <tr>
                            <th>2nd Floor</th>
                            <td> @if ($student->room==325)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 325</td>
                            <td> @if ($student->room==324)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 324</td>
                            <td> @if ($student->room==323)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 323</td>
                            <td> @if ($student->room==322)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 322</td>
                            <td> @if ($student->room==321)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 321</td>
                            <td> @if ($student->room==320)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 320</td>
                            <td> @if ($student->room==319)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 319</td>
                            <td> @if ($student->room==318)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 318</td>
                            <td> @if ($student->room==317)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 317</td>
                            <td> @if ($student->room==316)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 316</td>
                            <td> @if ($student->room==315)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 315</td>
                            <td> @if ($student->room==314)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 314</td>
                            <td> @if ($student->room==313)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 313</td>
                            <td> @if ($student->room==312)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 312</td>
                            <td> @if ($student->room==311)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 311</td>
                            <td> @if ($student->room==310)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 310</td>
                          </tr>
                          <tr>
                            <th>1st Floor</th>
                            <td> @if ($student->room==223)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 223</td>
                            <td> @if ($student->room==222)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 222</td>
                            <td> @if ($student->room==221)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 221</td>
                            <td> @if ($student->room==220)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 220</td>
                            <td> @if ($student->room==219)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 219</td>
                            <td> @if ($student->room==218)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 218</td>
                            <td> @if ($student->room==217)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 217</td>
                            <td> @if ($student->room==216)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 216</td>
                            <td colspan="2" rowspan="2" class="text-center">Blank</td>
                            <td> @if ($student->room==215)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 215</td>
                            <td> @if ($student->room==214)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 214</td>
                            <td> @if ($student->room==213)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 213</td>
                            <td> @if ($student->room==212)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 212</td>
                            <td> @if ($student->room==211)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 211</td>
                            <td> @if ($student->room==210)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 210</td>
                          </tr>
                          <tr>
                            <th>Ground Floor</th>
                            <td colspan="2" class="text-center">Bathroom</td>
                            <td> @if ($student->room==119)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 119</td>
                            <td> @if ($student->room==118)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 118</td>
                            <td> @if ($student->room==117)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 117</td>
                            <td> @if ($student->room==116)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 116</td>
                            <td> @if ($student->room==115)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 115</td>
                            <td> @if ($student->room==114)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 114</td>
                            <td> @if ($student->room==113)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 113</td>
                            <td> @if ($student->room==112)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 112</td>
                            <td> @if ($student->room==111)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 111</td>
                            <td> @if ($student->room==110)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 110</td>
                            <td> @if ($student->room==109)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 109</td>
                            <td> @if ($student->room==108)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 108</td>
                          </tr>
                        </table>
                      </div>
                      <div class="card card-body">
                        <h2 class="card-header text-center mb-2">East Sid</h2>
                        <table class="table table-striped">
                          <tr>
                            <th>4th Floor</th>
                            <td> @if ($student->room==526)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 526</td>
                            <td> @if ($student->room==527)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 527</td>
                            <td> @if ($student->room==528)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 528</td>
                            <td> @if ($student->room==529)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 529</td>
                            <td> @if ($student->room==530)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 530</td>
                            <td> @if ($student->room==531)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 531</td>
                            <td> @if ($student->room==532)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 532</td>
                            <td> @if ($student->room==533)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 533</td>
                            <td rowspan="6">Blank</td>
                            <td> @if ($student->room==534)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 534</td>
                            <td> @if ($student->room==535)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 535</td>
                            <td> @if ($student->room==536)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 536</td>
                            <td> @if ($student->room==537)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 537</td>
                            <td> @if ($student->room==538)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 538</td>
                            <td> @if ($student->room==539)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 539</td>
                            <td> @if ($student->room==540)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 540</td>
                          </tr>
                          <tr>
                            <th rowspan="2">3rd Floor</th>
                            <td  rowspan="2"> @if ($student->room==426)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 426</td>
                            <td rowspan="2"> @if ($student->room==427)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 427</td>
                            <td> @if ($student->room==428)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 428</td>
                            <td> @if ($student->room==430)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 430</td>
                            <td> @if ($student->room==432)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 432</td>
                            <td> @if ($student->room==434)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 434</td>
                            <td> @if ($student->room==436)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 436</td>
                            <td> @if ($student->room==438)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 438</td>
                            <td rowspan="2"> @if ($student->room==440)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 440</td>
                            <td rowspan="2"> @if ($student->room==441)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 441</td>
                            <td rowspan="2"> @if ($student->room==442)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 442</td>
                            <td rowspan="2"> @if ($student->room==443)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 443</td>
                            <td rowspan="2"> @if ($student->room==444)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 444</td>
                            <td rowspan="2"> @if ($student->room==445)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 445</td>
                            <td rowspan="2"> @if ($student->room==446)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 446</td>
                          </tr>
                          <tr>
                            <td> @if ($student->room==429)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 429</td>
                            <td> @if ($student->room==431)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 431</td>
                            <td> @if ($student->room==433)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 433</td>
                            <td> @if ($student->room==435)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 435</td>
                            <td> @if ($student->room==437)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 437</td>
                            <td> @if ($student->room==439)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 439</td>
                          </tr>
                          <tr>
                            <th>2nd Floor</th>
                            <td> @if ($student->room==324)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 324</td>
                            <td> @if ($student->room==325)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 325</td>
                            <td> @if ($student->room==326)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 326</td>
                            <td> @if ($student->room==327)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 327</td>
                            <td> @if ($student->room==328)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 328</td>
                            <td> @if ($student->room==329)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 329</td>
                            <td> @if ($student->room==330)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 330</td>
                            <td> @if ($student->room==331)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 331</td>
                            <td> @if ($student->room==332)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 332</td>
                            <td> @if ($student->room==333)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 333</td>
                            <td> @if ($student->room==334)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 334</td>
                            <td> @if ($student->room==335)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 335</td>
                            <td> @if ($student->room==336)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 336</td>
                            <td> @if ($student->room==337)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 337</td>
                            <td> @if ($student->room==338)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 338</td>
                          </tr>
                          <tr>
                            <th>1stFloor</th>
                            <td> @if ($student->room==224)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 224</td>
                            <td> @if ($student->room==225)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 225</td>
                            <td> @if ($student->room==226)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 226</td>
                            <td> @if ($student->room==227)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 227</td>
                            <td> @if ($student->room==228)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 228</td>
                            <td> @if ($student->room==229)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 229</td>
                            <td> @if ($student->room==230)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 230</td>
                            <td> @if ($student->room==231)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 231</td>
                            <td> @if ($student->room==232)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 232</td>
                            <td> @if ($student->room==233)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 233</td>
                            <td> @if ($student->room==234)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 234</td>
                            <td> @if ($student->room==235)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 235</td>
                            <td> @if ($student->room==236)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 236</td>
                            <td> @if ($student->room==237)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 237</td>
                            <td> @if ($student->room==238)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 238</td>
                          </tr>
                          <tr>
                            <th>Ground Floor</th>
                            <td> @if ($student->room==122)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 122</td>
                            <td> @if ($student->room==123)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 123</td>
                            <td> @if ($student->room==124)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 124</td>
                            <td> @if ($student->room==125)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 125</td>
                            <td> @if ($student->room==126)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 126</td>
                            <td> @if ($student->room==127)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 127</td>
                            <td> @if ($student->room==128)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 128</td>
                            <td> @if ($student->room==129)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 129</td>
                            <td> @if ($student->room==130)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 130</td>
                            <td> @if ($student->room==131)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 131</td>
                            <td> @if ($student->room==132)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 132</td>
                            <td> @if ($student->room==133)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 133</td>
                            <td> @if ($student->room==134)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 134</td>
                            <td> @if ($student->room==135)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 135</td>
                            <td> @if ($student->room==136)
                <span class="badge badge-info"><span class="mdi mdi-checkbox-marked"></span></span>@endif 136</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <div class="card card-body">
                      <div class="card-header text-center">
                        <p >Mahfujur@2019</p>
                      </div>
                    </div>
                    <!-- partial -->
                  </div>
                  <!-- row-offcanvas ends -->
                </div>
                @endsection