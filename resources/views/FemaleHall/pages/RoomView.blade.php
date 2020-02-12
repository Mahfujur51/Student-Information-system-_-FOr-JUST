@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('FemaleHall.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card card-body">
				<h2 class=" text-center card-header mb-4">Pond side</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">4th Floor</th>
							<td scope="col">
								<a href="{{route('student.froom501')}}" class="btn btn-info">501</a>


							</td>
							<td scope="col">
						<a href="{{route('student.froom502')}}" class="btn btn-info">502</a></td>
							<td scope="col">

								<a href="{{route('student.froom503')}}" class="btn btn-info">
							503</a></td>
							<td scope="col">

								<a href="{{route('student.froom504')}}" class="btn btn-info">
							504</a></td>
							<td scope="col">

								<a href="{{route('student.froom505')}}" class="btn btn-info">
							505</a></td>
							<td scope="col">
					<a href="{{route('student.froom506')}}" class="btn btn-info">506</a>

					</td>
							<td scope="col">
							<a href="{{route('student.froom507')}}" class="btn btn-info">
							507</a> </td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">3rd Floor</th>
							<td scope="col">
							<a href="{{route('student.froom401')}}" class="btn btn-info">

							401</a></td>
							<td scope="col">

								<a href="{{route('student.froom402')}}" class="btn btn-info">
							402</a></td>
							<td scope="col">

								<a href="{{route('student.froom403')}}" class="btn btn-info">
							403</a></td>
							<td scope="col">

								<a href="{{route('student.froom404')}}" class="btn btn-info">
							404</a></td>
							<td scope="col">
								<a href="{{route('student.froom405')}}" class="btn btn-info">

							405</a></td>
							<td scope="col">

								<a href="{{route('student.froom406')}}" class="btn btn-info">
							406</a></td>
							<td scope="col">

								<a href="{{route('student.froom407')}}" class="btn btn-info">
							407</a></td>
						</tr>
						<tr>
							<th scope="row">2nd Floor</th>
							<td scope="col">
								<a href="{{route('student.froom301')}}" class="btn btn-info">

							301</a></td>
							<td scope="col">
								<a href="{{route('student.froom302')}}" class="btn btn-info">

							302</a></td>
							<td scope="col">
								<a href="{{route('student.froom303')}}" class="btn btn-info">
							303</a></td>
							<td scope="col">
								<a href="{{route('student.froom304')}}" class="btn btn-info">
							304</a></td>
							<td scope="col">
								<a href="{{route('student.froom305')}}" class="btn btn-info">
							305</a></td>
							<td scope="col">
								<a href="{{route('student.froom306')}}" class="btn btn-info">
							306</a></td>
						</tr>
						<tr>
							<th scope="row">1st Floor</th>
							<td scope="col">
								<a href="{{route('student.froom201')}}" class="btn btn-info">

							201</a></td>
							<td scope="col">
								<a href="{{route('student.froom202')}}" class="btn btn-info">

							202</a></td>
							<td scope="col">
								<a href="{{route('student.froom203')}}" class="btn btn-info">
							203</a></td>
							<td scope="col">
								<a href="{{route('student.froom204')}}" class="btn btn-info">
							204</a></td>
							<td scope="col">
								<a href="{{route('student.froom205')}}" class="btn btn-info">
							205</a></td>
							<td scope="col">
								<a href="{{route('student.froom206')}}" class="btn btn-info">
							206</a></td>
						</tr>
						<tr>
							<th scope="row">Ground Floor</th>
							<td scope="col">
								<a href="{{route('student.froom101')}}" class="btn btn-info">
							101</a></td>
							<td scope="col">
								<a href="{{route('student.froom102')}}" class="btn btn-info">102</a>
								</td>
								<td><a href="" class="btn btn-info">Blank</a></td>
								<td><a href="" class="btn btn-info">Blank</a></td>
								<td><a href="" class="btn btn-info">Blank</a></td>
							
							
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card card-body">
				<h2 class="card-header text-center mb-4">Mosque Side</h2>
				<table class="table table-striped">
					<tr>
						<th>4th Floor</th>
						<td>
							<a href="{{route('student.froom508')}}" class="btn btn-info">
						508</a></td>
						<td>
							<a href="{{route('student.froom509')}}" class="btn btn-info">
						509</a></td>
						<td>
							<a href="{{route('student.froom501')}}" class="btn btn-info">
						510</a></td>
						<td>
							<a href="{{route('student.froom511')}}" class="btn btn-info">
						511</a></td>
						<td><a href="{{route('student.froom512')}}" class="btn btn-info">
						512</a></td>
						<td>
							<a href="{{route('student.froom513')}}" class="btn btn-info">
						513</a></td>
						<td>
							<a href="{{route('student.froom514')}}" class="btn btn-info">
						514</a></td>
						<td>
							<a href="{{route('student.froom515')}}" class="btn btn-info">
						515</a></td>
						<td>
							<a href="{{route('student.froom516')}}" class="btn btn-info">
						516</a></td>
					</tr>
					<tr>
						<th>3rd Floor</th>
						<td>
							<a href="{{route('student.froom408')}}" class="btn btn-info">
						408</a></td>
						<td>
							<a href="{{route('student.froom409')}}" class="btn btn-info">
						409</a></td>
						<td>
							<a href="{{route('student.froom410')}}" class="btn btn-info">
						410</a></td>
						<td>
							<a href="{{route('student.froom411')}}" class="btn btn-info">
						411</a></td>
						<td><a href="{{route('student.froom412')}}" class="btn btn-info">
						412</a></td>
						<td>
							<a href="{{route('student.froom413')}}" class="btn btn-info">
						413</a></td>
						<td>
							<a href="{{route('student.froom414')}}" class="btn btn-info">
						414</a></td>
						<td>
							<a href="{{route('student.froom415')}}" class="btn btn-info">
						415</a></td>
						<td>
							<a href="{{route('student.froom416')}}" class="btn btn-info">
						416</a></td>
					</tr>
					<tr>
						<th>2nd Floor</th>
						<td>
							<a  class="btn btn-info">
						Namaz</a></td>
						<td>
							<a href="{{route('student.froom308')}}" class="btn btn-info">
						308</a></td>
						<td>
							<a href="{{route('student.froom309')}}" class="btn btn-info">
						309</a></td>
						<td>
							<a href="{{route('student.froom310')}}" class="btn btn-info">
						310</a></td>
						<td><a href="{{route('student.froom311')}}" class="btn btn-info">
						311</a></td>
						<td>
							<a href="{{route('student.froom312')}}" class="btn btn-info">
						312</a></td>
						<td>
							<a href="{{route('student.froom313')}}" class="btn btn-info">
						313</a></td>
						<td>
							<a href="{{route('student.froom314')}}" class="btn btn-info">
						314</a></td>
					</tr>
					<tr>
						<th>1st Floor</th>
						<td>
						<a href="{{route('student.froom207')}}" class="btn btn-info">
						207</a></td>
						<td>
							<a href="{{route('student.froom208')}}" class="btn btn-info">
						208</a></td>
						<td><a href="{{route('student.froom209')}}" class="btn btn-info">
						209</a></td>
						<td>
							<a href="{{route('student.froom210')}}" class="btn btn-info">
						210</a></td>
						<td>
							<a href="{{route('student.froom211')}}" class="btn btn-info">
						211</a></td>
						<td>
							<a href="{{route('student.froom212')}}" class="btn btn-info">
						212</a></td>
						<td>
							<a href="{{route('student.froom213')}}" class="btn btn-info">
						213</a></td>
						<td>
							<a href="{{route('student.froom214')}}" class="btn btn-info">
						214</a></td>
						<td>
							<a href="{{route('student.froom215')}}" class="btn btn-info">
						215</a></td>
					</tr>
					<tr>
						<th>Ground Floor</th>
						<td><a href="{{route('student.froom106')}}" class="btn btn-info">
						106</a></td>
						<td><a href="{{route('student.froom107')}}" class="btn btn-info">
						107</a></td>
						<td><a href="{{route('student.froom108')}}" class="btn btn-info">
						108</a></td>
						<td><a href="{{route('student.froom109')}}" class="btn btn-info">
						109</a></td>
						<td><a href="{{route('student.froom110')}}" class="btn btn-info">
						110</a></td>
						<td><a href="{{route('student.froom111')}}" class="btn btn-info">
						111</a></td>
						<td><a href="{{route('student.froom112')}}" class="btn btn-info">
						112</a></td>
					</tr>
				</table>
			</div>
			<div class="card card-body">
				<h2 class="card-header text-center mb-2">Front Sid</h2>
				<table class="table table-striped">
					<tr>
						<th>4th Floor</th>
						<td><a href="{{route('student.froom517')}}" class="btn-info">
						517</a></td>
						<td><a href="{{route('student.froom518')}}" class="btn-info">
						518</a></td>
						<td><a href="{{route('student.froom519')}}" class="btn-info">
						519</a></td>
						<td><a href="{{route('student.froom520')}}" class="btn-info">
						520</a></td>
						<td><a href="{{route('student.froom521')}}" class="btn-info">
						521</a></td>
						<td rowspan="5">Stair</td>
						<td><a href="{{route('student.froom522')}}" class="btn-info">
						522</a></td>
						<td><a href="{{route('student.froom523')}}" class="btn-info">
						523</a></td>
						<td><a href="{{route('student.froom524')}}" class="btn-info">
						524</a></td>
						<td><a href="{{route('student.froom525')}}" class="btn-info">
						525</a></td>
						<td><a href="{{route('student.froom526')}}" class="btn-info">
						526</a></td>
						<td><a href="{{route('student.froom527')}}" class="btn-info">
						527</a></td>
						<td rowspan="5">Stair</td>
						<td><a href="{{route('student.froom528')}}" class="btn-info">
						528</a></td>
						<td><a href="{{route('student.froom529')}}" class="btn-info">
						529</a></td>
						<td><a href="{{route('student.froom530')}}" class="btn-info">
						530</a></td>
						<td><a href="{{route('student.froom531')}}" class="btn-info">
						531</a></td>
						<td><a href="{{route('student.froom532')}}" class="btn-info">
						532</a></td>
					</tr>
					<tr>
						<th>3rd Floor</th>
						<td>
							<a href="{{route('student.froom417')}}" class="btn-info">
						417</a></td>
						<td>
							<a href="{{route('student.froom418')}}" class="btn-info">
						418</a></td>
						<td><a href="{{route('student.froom419')}}" class="btn-info">
						419</a></td>
						<td><a href="{{route('student.froom420')}}" class="btn-info">
						420</a></td>
						<td><a href="{{route('student.froom421')}}" class="btn-info">
						421</a></td>
						<td><a href="{{route('student.froom422')}}" class="btn-info">
						422</a></td>
						<td><a href="{{route('student.froom423')}}" class="btn-info">
						423</a></td>
						<td><a href="{{route('student.froom424')}}" class="btn-info">
						424</a></td>
						<td><a href="{{route('student.froom425')}}" class="btn-info">
						425</a></td>
						<td><a href="{{route('student.froom426')}}" class="btn-info">
						426</a></td>
						<td><a href="{{route('student.froom427')}}" class="btn-info">
						427</a></td>
						<td><a href="{{route('student.froom428')}}" class="btn-info">
						428</a></td>
						<td><a href="{{route('student.froom429')}}" class="btn-info">
						429</a></td>
						<td><a href="{{route('student.froom430')}}" class="btn-info">
						430</a></td>
						<td><a href="{{route('student.froom431')}}" class="btn-info">
						431</a></td>
						<td><a href="{{route('student.froom432')}}" class="btn-info">
						432</a></td>
					</tr>
					<tr>
						<th>2nd Floor</th>
						<td><a href="{{route('student.froom315')}}" class="btn-info">
						315</a></td>
						<td><a href="{{route('student.froom316')}}" class="btn-info">
						316</a></td>
						<td><a href="{{route('student.froom317')}}" class="btn-info">
						317</a></td>
						<td><a href="{{route('student.froom318')}}" class="btn-info">
						318</a></td>
						<td><a href="{{route('student.froom319')}}" class="btn-info">
						319</a></td>
						<td><a href="{{route('student.froom320')}}" class="btn-info">
						320</a></td>
						<td><a href="{{route('student.froom321')}}" class="btn-info">
						321</a></td>
						<td><a href="{{route('student.froom322')}}" class="btn-info">
						322</a></td>
						<td><a href="{{route('student.froom323')}}" class="btn-info">
						323</a></td>
						<td><a href="{{route('student.froom324')}}" class="btn-info">
						324</a></td>
						<td><a href="{{route('student.froom325')}}" class="btn-info">
						325</a></td>
						<td><a href="{{route('student.froom326')}}" class="btn-info">
						326</a></td>
						<td><a href="{{route('student.froom327')}}" class="btn-info">
						327</a></td>
						<td><a href="{{route('student.froom328')}}" class="btn-info">
						328</a></td>
						<td><a href="{{route('student.froom329')}}" class="btn-info">
						329</a></td>
						<td><a href="{{route('student.froom330')}}" class="btn-info">
						330</a></td>
					</tr>
					<tr>
						<th>1stFloor</th>
						<td><a href="{{route('student.froom216')}}" class="btn-info">
						216</a></td>
						<td><a href="{{route('student.froom217')}}" class="btn-info">
						217</a></td>
						<td><a href="{{route('student.froom218')}}" class="btn-info">
						218</a></td>
						<td><a href="{{route('student.froom219')}}" class="btn-info">
						219</a></td>
						<td><a href="{{route('student.froom220')}}" class="btn-info">
						220</a></td>
						<td><a  class="btn-info">
						C.R</a></td>
						<td colspan="2"><a class="btn-info">
						GonoRoom</a></td>
						<td><a class="btn-info">
						TV.R</a></td>
						<td><a href="{{route('student.froom221')}}" class="btn-info">
						221</a></td>
						
						<td><a href="{{route('student.froom222')}}" class="btn-info">
						222</a></td>
						<td><a href="{{route('student.froom223')}}" class="btn-info">
						223</a></td>
						<td><a href="{{route('student.froom224')}}" class="btn-info">
						224</a></td>
						<td><a href="{{route('student.froom225')}}" class="btn-info">
						225</a></td>
						<td><a href="{{route('student.froom226')}}" class="btn-info">
						226</a></td>
					</tr>
					<tr>
						<th>Ground Floor</th>
						<td><a href="{{route('student.froom113')}}" class="btn-info">
						113</a></td>
						<td><a href="{{route('student.froom114')}}" class="btn-info">
						114</a></td>
						<td><a href="{{route('student.froom115')}}" class="btn-info">
						115</a></td>
						<td><a href="{{route('student.froom116')}}" class="btn-info">
						116</a></td>
						<td colspan=".5"><a href="{{route('student.froom117')}}" class="btn-info">
						117</a></td>
						<td colspan=".5"><a href="{{route('student.froom118')}}" class="btn-info">
						118</a></td>
						<td><a href="{{route('student.froom119')}}" class="btn-info">
						119</a></td>
						<td><a href="{{route('student.froom120')}}" class="btn-info">
						120</a></td>
						<td><a href="{{route('student.froom121')}}" class="btn-info">
						121</a></td>
						<td><a href="{{route('student.froom122')}}" class="btn-info">
						122</a></td>
						<td><a href="{{route('student.froom123')}}" class="btn-info">
						123</a></td>
						<td><a href="{{route('student.froom124')}}" class="btn-info">
						124</a></td>
						<td><a href="{{route('student.froom125')}}" class="btn-info">
						125</a></td>
						<td><a href="{{route('student.froom126')}}" class="btn-info">
						126</a></td>
						<td><a href="{{route('student.froom127')}}" class="btn-info">
						127</a></td>
						<td><a href="{{route('student.froom128')}}" class="btn-info">
						128</a></td>
						<td><a href="{{route('student.froom129')}}" class="btn-info">
						129</a></td>
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