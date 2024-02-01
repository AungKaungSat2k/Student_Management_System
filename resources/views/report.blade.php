@extends('layout.app')
@section('content')
<div style='margin:20px; padding:20px;'>
    <h1 align='center'>Payment Recipt</h1>
    <hr/>
    <p>Recipt No: <b>"".paid."</b></p>

    <p>Date: <b>".$payment->paid_date."</b></p>

    <p>Enrollment No: <b>".$payment->enrollment->enroll_no."</b></p>

    <p>Student Name: <b>".$payment->enrollment->student->name"</b></p>

    <table style="width:100%";>

    <tr>
        <td>Description</td>
        <td>Amount</td>
    </tr>

    <tr>
        <td><h3>".$payment->enrollment->batch->name."</h3></td>
        <td><h3>".$payment->amount."</h3></td>
    </tr>

    </table>

    <hr/>
    <span>Printed By: <b>".Auth::user()->name."</b></span>
    <span>Printed Datte: <b>".date('Y m d')."</b></span>

</div>
$pdf->loadHTML($print);
return $pdf->stream();
