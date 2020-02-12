@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('HallAuthority.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card card-body">
				<h2 class=" text-center card-header mb-4">North side</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">4th Floor</th>
							<td scope="col">
								<a href="{{ route('student.room509') }}" class="btn btn-info">509</a>

								
							</td>
							<td scope="col">
						<a href="{{ route('student.room508') }}" class="btn btn-info">508</a></td>
							<td scope="col">

								<a href="{{ route('student.room507') }}" class="btn btn-info">
							507</a></td>
							<td scope="col">

								<a href="{{ route('student.room506') }}" class="btn btn-info">
							506</a></td>
							<td scope="col">

								<a href="{{ route('student.room505') }}" class="btn btn-info">
							505</a></td>
							<td scope="col">
					<a href="{{ route('student.room504') }}" class="btn btn-info">504</a>

					</td>
							<td scope="col">
							<a href="{{ route('student.room503') }}" class="btn btn-info">	
							503</a> </td>
							<td scope="col">
						<a href="{{ route('student.room502') }}" class="btn btn-info">
								502</a>
							</td>
							<td scope="col">

							<a href="{{ route('student.room501') }}" class="btn btn-info">	
								501</a>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">3rd Floor</th>
							<td scope="col">
							<a href="{{ route('student.room409') }}" class="btn btn-info">
								
							409</a></td>
							<td scope="col">

								<a href="{{ route('student.room408') }}" class="btn btn-info">
							408</a></td>
							<td scope="col">

								<a href="{{ route('student.room407') }}" class="btn btn-info">
							407</a></td>
							<td scope="col">

								<a href="{{ route('student.room406') }}" class="btn btn-info">
							406</a></td>
							<td scope="col">
								<a href="{{ route('student.room405') }}" class="btn btn-info">
								
							405</a></td>
							<td scope="col">

								<a href="{{ route('student.room404') }}" class="btn btn-info">
							404</a></td>
							<td scope="col">

								<a href="{{ route('student.room403') }}" class="btn btn-info">
							403</a></td>
							<td scope="col">

								<a href="{{ route('student.room402') }}" class="btn btn-info">
							402</a></td>
							
							<td scope="col"><a href="{{ route('student.room401') }}" class="btn btn-info">
							401</a></td>
						</tr>
						<tr>
							<th scope="row">2nd Floor</th>
							<td scope="col">
								<a href="{{ route('student.room309') }}" class="btn btn-info">
								
							309</a></td>
							<td scope="col">
								<a href="{{ route('student.room308') }}" class="btn btn-info">
								
							308</a></td>
							<td scope="col">
								<a href="{{ route('student.room307') }}" class="btn btn-info">
							307</a></td>
							<td scope="col">
								<a href="{{ route('student.room306') }}" class="btn btn-info">
							306</a></td>
							<td scope="col">
								<a href="{{ route('student.room305') }}" class="btn btn-info">
							305</a></td>
							<td scope="col">
								<a href="{{ route('student.room304') }}" class="btn btn-info">
							304</a></td>
							<td scope="col">
								<a href="{{ route('student.room303') }}" class="btn btn-info">
							303</a></td>
							<td scope="col">
								<a href="{{ route('student.room302') }}" class="btn btn-info">
							302</a></td>
							<td scope="col">
								<a href="{{ route('student.room301') }}" class="btn btn-info">
							301</a></td>
						</tr>
						<tr>
							<th scope="row">1st Floor</th>
							<td scope="col">
								<a href="{{ route('student.room209') }}" class="btn btn-info">
								
							209</a></td>
							<td scope="col">
								<a href="{{ route('student.room208') }}" class="btn btn-info">
								
							208</a></td>
							<td scope="col">
								<a href="{{ route('student.room207') }}" class="btn btn-info">
							207</a></td>
							<td scope="col">
								<a href="{{ route('student.room206') }}" class="btn btn-info">
							206</a></td>
							<td scope="col">
								<a href="{{ route('student.room205') }}" class="btn btn-info">
							205</a></td>
							<td scope="col">
								<a href="{{ route('student.room204') }}" class="btn btn-info">
							204</a></td>
							<td scope="col">
								<a href="{{ route('student.room203') }}" class="btn btn-info">
							203</a></td>
							<td scope="col">
								<a href="{{ route('student.room202') }}" class="btn btn-info">
							202</a></td>
							<td scope="col">
								<a href="{{ route('student.room201') }}" class="btn btn-info">
							201</a></td>
						</tr>
						<tr>
							<th scope="row">Ground Floor</th>
							<td scope="col">
							<td scope="col">
								<a href="{{ route('student.room107') }}" class="btn btn-info">
							107</a></td>
							<td scope="col">
								<a href="{{ route('student.room106') }}" class="btn btn-info">
							106</a></td>
							<td scope="col">
								<a href="{{ route('student.room105') }}" class="btn btn-info">
							105</a></td>
							<td scope="col">
								<a href="{{ route('student.room104') }}" class="btn btn-info">
							104</a></td>
							<td scope="col">
								<a href="{{ route('student.room103') }}" class="btn btn-info">
							103</a></td>
							<td scope="col">
								<a href="{{ route('student.room102') }}" class="btn btn-info">
							102</a></td>
							<td scope="col">
								<a href="{{ route('student.room101') }}" class="btn btn-info">
							101</a></td>
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
						<td>
							<a href="{{ route('student.room525') }}" class="btn-info">
						525</a></td>
						<td>
							<a href="{{ route('student.room524') }}" class="btn-info">
						524</a></td>
						<td>
							<a href="{{ route('student.room523') }}" class="btn-info">
						523</a></td>
						<td>
							<a href="{{ route('student.room522') }}" class="btn-info">
						522</a></td>
						<td><a href="{{ route('student.room521') }}" class="btn-info">
						521</a></td>
						<td>
							<a href="{{ route('student.room520') }}" class="btn-info">
						520</a></td>
						<td>
							<a href="{{ route('student.room519') }}" class="btn-info">
						519</a></td>
						<td>
							<a href="{{ route('student.room518') }}" class="btn-info">
						518</a></td>
						<td>
							<a href="{{ route('student.room517') }}" class="btn-info">
						517</a></td>
						<td>
							<a href="{{ route('student.room516') }}" class="btn-info">
						516</a></td>
						<td>
							<a href="{{ route('student.room515') }}" class="btn-info">
						515</a></td>
						<td>
							<a href="{{ route('student.room514') }}" class="btn-info">
						514</a></td>
						<td>
							<a href="{{ route('student.room513') }}" class="btn-info">
						513</a></td>
						<td>
							<a href="{{ route('student.room512') }}" class="btn-info">
						512</a></td>
						<td>
							<a href="{{ route('student.room511') }}" class="btn-info">
						511</a></td>
						<td>

							<a href="{{ route('student.room510') }}" class="btn-info">
						510</a></td>
					</tr>
					<tr>
						<th>3rd Floor</th>
						<td>
							<a href="{{ route('student.room425') }}" class="btn-info">
						425</a></td>
						<td>
							<a href="{{ route('student.room424') }}" class="btn-info">
						424</a></td>
						<td>
							<a href="{{ route('student.room423') }}" class="btn-info">
						423</a></td>
						<td>
							<a href="{{ route('student.room422') }}" class="btn-info">
						422</a></td>
						<td><a href="{{ route('student.room421') }}" class="btn-info">
						421</a></td>
						<td>
							<a href="{{ route('student.room420') }}" class="btn-info">
						420</a></td>
						<td>
							<a href="{{ route('student.room419') }}" class="btn-info">
						419</a></td>
						<td>
							<a href="{{ route('student.room418') }}" class="btn-info">
						418</a></td>
						<td>
							<a href="{{ route('student.room417') }}" class="btn-info">
						417</a></td>
						<td>
							<a href="{{ route('student.room416') }}" class="btn-info">
						416</a></td>
						<td>
							<a href="{{ route('student.room415') }}" class="btn-info">
						415</a></td>
						<td>
							<a href="{{ route('student.room414') }}" class="btn-info">
						414</a></td>
						<td>
							<a href="{{ route('student.room413') }}" class="btn-info">
						413</a></td>
						<td>
							<a href="{{ route('student.room412') }}" class="btn-info">
						412</a></td>
						<td>
							<a href="{{ route('student.room411') }}" class="btn-info">
						411</a></td>
						<td>

							<a href="{{ route('student.room410') }}" class="btn-info">
						410</a></td>
					</tr>
					<tr>
						<th>2nd Floor</th>
						<td>
							<a href="{{ route('student.room325') }}" class="btn-info">
						325</a></td>
						<td>
							<a href="{{ route('student.room324') }}" class="btn-info">
						324</a></td>
						<td>
							<a href="{{ route('student.room323') }}" class="btn-info">
						323</a></td>
						<td>
							<a href="{{ route('student.room322') }}" class="btn-info">
						322</a></td>
						<td><a href="{{ route('student.room321') }}" class="btn-info">
						321</a></td>
						<td>
							<a href="{{ route('student.room320') }}" class="btn-info">
						320</a></td>
						<td>
							<a href="{{ route('student.room319') }}" class="btn-info">
						319</a></td>
						<td>
							<a href="{{ route('student.room318') }}" class="btn-info">
						318</a></td>
						<td>
							<a href="{{ route('student.room317') }}" class="btn-info">
						317</a></td>
						<td>
							<a href="{{ route('student.room316') }}" class="btn-info">
						316</a></td>
						<td>
							<a href="{{ route('student.room315') }}" class="btn-info">
						315</a></td>
						<td>
							<a href="{{ route('student.room314') }}" class="btn-info">
						314</a></td>
						<td>
							<a href="{{ route('student.room313') }}" class="btn-info">
						313</a></td>
						<td>
							<a href="{{ route('student.room312') }}" class="btn-info">
						312</a></td>
						<td>
							<a href="{{ route('student.room311') }}" class="btn-info">
						311</a></td>
						<td>

							<a href="{{ route('student.room310') }}" class="btn-info">
						310</a></td>
					</tr>
					<tr>
						<th>1st Floor</th>
						<td>
						<a href="{{ route('student.room223') }}" class="btn-info">
						223</a></td>
						<td>
							<a href="{{ route('student.room222') }}" class="btn-info">
						222</a></td>
						<td><a href="{{ route('student.room221') }}" class="btn-info">
						221</a></td>
						<td>
							<a href="{{ route('student.room220') }}" class="btn-info">
						220</a></td>
						<td>
							<a href="{{ route('student.room219') }}" class="btn-info">
						219</a></td>
						<td>
							<a href="{{ route('student.room218') }}" class="btn-info">
						218</a></td>
						<td>
							<a href="{{ route('student.room217') }}" class="btn-info">
						217</a></td>
						<td>
							<a href="{{ route('student.room216') }}" class="btn-info">
						216</a></td>
						
						<td colspan="2" rowspan="2" class="text-center">Blank</td>
						<td>
						<a href="{{ route('student.room215') }}" class="btn-info">
						215</a></td>
						<td>
							<a href="{{ route('student.room214') }}" class="btn-info">
						214</a></td>
						<td>
							<a href="{{ route('student.room213') }}" class="btn-info">
						213</a></td>
						<td>
							<a href="{{ route('student.room212') }}" class="btn-info">
						212</a></td>
						<td>
							<a href="{{ route('student.room211') }}" class="btn-info">
						211</a></td>
						<td>

							<a href="{{ route('student.room210') }}" class="btn-info">
						210</a></td>
					</tr>
					<tr>
						<th>Ground Floor</th>
						<td colspan="2" class="text-center">Bathroom</td>
						<td><a href="{{ route('student.room119') }}" class="btn-info">
						119</a></td>
						<td><a href="{{ route('student.room118') }}" class="btn-info">
						118</a></td>
						<td><a href="{{ route('student.room117') }}" class="btn-info">
						117</a></td>
						<td><a href="{{ route('student.room116') }}" class="btn-info">
						116</a></td>
						<td><a href="{{ route('student.room115') }}" class="btn-info">
						115</a></td>
						<td><a href="{{ route('student.room114') }}" class="btn-info">
						114</a></td>
						<td><a href="{{ route('student.room113') }}" class="btn-info">
						113</a></td>
						<td><a href="{{ route('student.room112') }}" class="btn-info">
						112</a></td>
						<td><a href="{{ route('student.room111') }}" class="btn-info">
						111</a></td>
						<td><a href="{{ route('student.room110') }}" class="btn-info">
						110</a></td>
						<td><a href="{{ route('student.room109') }}" class="btn-info">
						109</a></td>
						<td><a href="{{ route('student.room108') }}" class="btn-info">
						108</a></td>
					</tr>
				</table>
			</div>
			<div class="card card-body">
				<h2 class="card-header text-center mb-2">East Sid</h2>
				<table class="table table-striped">
					<tr>
						<th>4th Floor</th>
						<td><a href="{{ route('student.room526') }}" class="btn-info">
						526</a></td>
						<td><a href="{{ route('student.room527') }}" class="btn-info">
						527</a></td>
						<td><a href="{{ route('student.room528') }}" class="btn-info">
						528</a></td>
						<td><a href="{{ route('student.room529') }}" class="btn-info">
						529</a></td>
						<td><a href="{{ route('student.room530') }}" class="btn-info">
						530</a></td>
						<td><a href="{{ route('student.room531') }}" class="btn-info">
						531</a></td>
						<td><a href="{{ route('student.room532') }}" class="btn-info">
						532</a></td>
						<td><a href="{{ route('student.room533') }}" class="btn-info">
						533</a></td>
						<td rowspan="6">Blank</td>
						<td><a href="{{ route('student.room534') }}" class="btn-info">
						534</a></td>
						<td><a href="{{ route('student.room535') }}" class="btn-info">
						535</a></td>
						<td><a href="{{ route('student.room536') }}" class="btn-info">
						536</a></td>
						<td><a href="{{ route('student.room537') }}" class="btn-info">
						537</a></td>
						<td><a href="{{ route('student.room538') }}" class="btn-info">
						538</a></td>
						<td><a href="{{ route('student.room539') }}" class="btn-info">
						539</a></td>
						<td><a href="{{ route('student.room540') }}" class="btn-info">
						540</a></td>
					</tr>
					<tr>
						<th rowspan="2">3rd Floor</th>
						<td  rowspan="2">
							<a href="{{ route('student.room426') }}" class="btn-info">
						426</a></td>
						<td rowspan="2">
							<a href="{{ route('student.room427') }}" class="btn-info">
						427</a></td>
						<td><a href="{{ route('student.room428') }}" class="btn-info">
						428</a></td>
						<td><a href="{{ route('student.room430') }}" class="btn-info">
						430</a></td>
						<td><a href="{{ route('student.room432') }}" class="btn-info">
						432</a></td>
						<td><a href="{{ route('student.room434') }}" class="btn-info">
						434</a></td>
						<td><a href="{{ route('student.room436') }}" class="btn-info">
						436</a></td>
						<td><a href="{{ route('student.room438') }}" class="btn-info">
						438</a></td>
						<td rowspan="2"><a href="{{ route('student.room440') }}" class="btn-info">
						440</a></td>
						<td rowspan="2"><a href="{{ route('student.room441') }}" class="btn-info">
						441</a></td>
						<td rowspan="2"><a href="{{ route('student.room442') }}" class="btn-info">
						442</a></td>
						<td rowspan="2"><a href="{{ route('student.room443') }}" class="btn-info">
						443</a></td>
						<td rowspan="2"><a href="{{ route('student.room444') }}" class="btn-info">
						444</a></td>
						<td rowspan="2"><a href="{{ route('student.room445') }}" class="btn-info">
						445</a></td>
						<td rowspan="2"><a href="{{ route('student.room446') }}" class="btn-info">
						446</a></td>
					</tr>
					<tr>
						<td><a href="{{ route('student.room429') }}" class="btn-info">
						429</a></td>
						<td><a href="{{ route('student.room431') }}" class="btn-info">
						431</a></td>
						<td><a href="{{ route('student.room433') }}" class="btn-info">
						433</a></td>
						<td><a href="{{ route('student.room435') }}" class="btn-info">
						435</a></td>
						<td><a href="{{ route('student.room437') }}" class="btn-info">
						437</a></td>
						<td><a href="{{ route('student.room439') }}" class="btn-info">
						439</a></td>
					</tr>
					<tr>
						<th>2nd Floor</th>
						<td><a href="{{ route('student.roome324') }}" class="btn-info">
						324</a></td>
						<td><a href="{{ route('student.roome325') }}" class="btn-info">
						325</a></td>
						<td><a href="{{ route('student.room326') }}" class="btn-info">
						326</a></td>
						<td><a href="{{ route('student.room327') }}" class="btn-info">
						327</a></td>
						<td><a href="{{ route('student.room328') }}" class="btn-info">
						328</a></td>
						<td><a href="{{ route('student.room329') }}" class="btn-info">
						329</a></td>
						<td><a href="{{ route('student.room330') }}" class="btn-info">
						330</a></td>
						<td><a href="{{ route('student.room331') }}" class="btn-info">
						331</a></td>
						<td><a href="{{ route('student.room332') }}" class="btn-info">
						332</a></td>
						<td><a href="{{ route('student.room333') }}" class="btn-info">
						333</a></td>
						<td><a href="{{ route('student.room334') }}" class="btn-info">
						334</a></td>
						<td><a href="{{ route('student.room335') }}" class="btn-info">
						335</a></td>
						<td><a href="{{ route('student.room336') }}" class="btn-info">
						336</a></td>
						<td><a href="{{ route('student.room337') }}" class="btn-info">
						337</a></td>
						<td><a href="{{ route('student.room338') }}" class="btn-info">
						338</a></td>
					</tr>
					<tr>
						<th>1stFloor</th>
						<td><a href="{{ route('student.room224') }}" class="btn-info">
						224</a></td>
						<td><a href="{{ route('student.room225') }}" class="btn-info">
						225</a></td>
						<td><a href="{{ route('student.room226') }}" class="btn-info">
						226</a></td>
						<td><a href="{{ route('student.room227') }}" class="btn-info">
						227</a></td>
						<td><a href="{{ route('student.room228') }}" class="btn-info">
						228</a></td>
						<td><a href="{{ route('student.room229') }}" class="btn-info">
						229</a></td>
						<td><a href="{{ route('student.room230') }}" class="btn-info">
						230</a></td>
						<td><a href="{{ route('student.room231') }}" class="btn-info">
						231</a></td>
						<td><a href="{{ route('student.room232') }}" class="btn-info">
						232</a></td>
						<td><a href="{{ route('student.room233') }}" class="btn-info">
						233</a></td>
						<td><a href="{{ route('student.room234') }}" class="btn-info">
						234</a></td>
						<td><a href="{{ route('student.room235') }}" class="btn-info">
						235</a></td>
						<td><a href="{{ route('student.room236') }}" class="btn-info">
						236</a></td>
						<td><a href="{{ route('student.room237') }}" class="btn-info">
						237</a></td>
						<td><a href="{{ route('student.room238') }}" class="btn-info">
						238</a></td>
					</tr>
					<tr>
						<th>Ground Floor</th>
						<td><a href="{{ route('student.room122') }}" class="btn-info">
						122</a></td>
						<td><a href="{{ route('student.room123') }}" class="btn-info">
						123</a></td>
						<td><a href="{{ route('student.room124') }}" class="btn-info">
						124</a></td>
						<td><a href="{{ route('student.room125') }}" class="btn-info">
						125</a></td>
						<td><a href="{{ route('student.room126') }}" class="btn-info">
						126</a></td>
						<td><a href="{{ route('student.room127') }}" class="btn-info">
						127</a></td>
						<td><a href="{{ route('student.room128') }}" class="btn-info">
						128</a></td>
						<td><a href="{{ route('student.room129') }}" class="btn-info">
						129</a></td>
						<td><a href="{{ route('student.room130') }}" class="btn-info">
						130</a></td>
						<td><a href="{{ route('student.room131') }}" class="btn-info">
						131</a></td>
						<td><a href="{{ route('student.room132') }}" class="btn-info">
						132</a></td>
						<td><a href="{{ route('student.room133') }}" class="btn-info">
						133</a></td>
						<td><a href="{{ route('student.room134') }}" class="btn-info">
						134</a></td>
						<td><a href="{{ route('student.room135') }}" class="btn-info">
						135</a></td>
						<td><a href="{{ route('student.room136') }}" class="btn-info">
						136</a></td>
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