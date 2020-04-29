@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vdo 1. มาตรการการให้ผลตอบแทนโปรแกรม SALE FORCE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <video width="100%"  controls controlsList="nodownload">
                    <source src="http://13.229.61.108/nidapi/covid/2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Vdo2. วิธีการแชร์ Codeของพนักงาน ให้ลูกค้าเพื่อรับคอมมิชชั่น 20 % จากการซื้อของลูกค้า อย่างละเอียด </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <video width="100%"  controls controlsList="nodownload">
                        <source src="http://13.229.61.108/nidapi/covid/1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
</div>
    
</div>
@endsection
