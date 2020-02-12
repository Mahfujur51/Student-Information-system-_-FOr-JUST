@extends('multiauth::layouts.app')
@section('content')

@admin('administration')
@include('Administration.administration')
@endadmin

@admin('hall')
@include('HallAuthority.index')
@endadmin
@admin('dean')
@include('Dean.index')
@endadmin

@admin('femalehall')
@include('FemaleHall.index')
@endadmin
@admin('registeroffice')
@include('Register.index')
@endadmin
@admin('cse')
 @include('CseDepartment.index')
@endadmin

@admin('csechariman')
@include('Chairmancse.index')
@endadmin
@admin('malehall')
@include('MaleHall.index')
@endadmin

@admin('biodean')
@include('BioDean.index')
@endadmin
@admin('appliedscience')
@include('AppDean.index')
@endadmin
@admin('arts')
@include('ArtsDean.index')
@endadmin
@admin('science')
@include('SciDean.index')
@endadmin

@admin('business')
@include('BusDean.index')
@endadmin
@admin('healthscience')
@include('HealthDean.index')
@endadmin

@admin('eeeteacher')
@include('EeeDepartment.index')
@endadmin

@admin('environment')
@include('EstDepartment.index')

@endadmin
@admin('mbteacher')
@include('mbDepartment.index')

@endadmin
@admin('fmbteacher')
@include('fmbDepartment.index')
@endadmin
@admin('cheteacher')
@include('cheDepartment.index')
@endadmin
@admin('gebtteacher')
@include('gebtDepartment.index')
@endadmin
@admin('ipeteacher')
@include('ipeDepartment.index')
@endadmin
@admin('pmeteacher')
@include('pmeDepartment.index')
@endadmin
@admin('nftteacher')
@include('nftDepartment.index')
@endadmin

@admin('pharmteacher')
@include('pharmDepartment.index')
@endadmin
@admin('pessteacher')
@include('pessDepartment.index')
@endadmin
@admin('phyteacher')
@include('phyDepartment.index')
@endadmin
@admin('chemteacher')
@include('chemDepartment.index')
@endadmin
@admin('mathteacher')
@include('mathDepartment.index')
@endadmin
@admin('engteacher')
@include('engDepartment.index')
@endadmin
@admin('apptteacher')
@include('apptDepartment.index')
@endadmin
@admin('aisteacher')
@include('aisDepartment.index')
@endadmin
@admin('bmeteacher')
@include('bmeDepartment.index')
@endadmin
@admin('mgtteacher')
@include('mgtDepartment.index')
@endadmin
@admin('teteacher')
@include('teDepartment.index')
@endadmin
@admin('mktteacher')
@include('mktDepartment.index')
@endadmin
@admin('cdmteacher')
@include('cdmDepartment.index')
@endadmin
@admin('nhsteacher')
@include('nhsDepartment.index')
@endadmin
@admin('engineer')
@include('Engineer.index')
@endadmin












@endsection