@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$monitoring->name}}</div>
                        <div class="panel-body">
                            <table align="left">
                                <tr>
                                    <td width="50%">
                                        Content Approached:
                                    </td>
                                    <td width="50%">
                                        {{$monitoring->contentApproached}}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        Place:
                                    </td>
                                    <td width="50%">
                                        {{$monitoring->place}}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        Starting time:
                                    </td>
                                    <td width="50%">
                                        {{$monitoring->startTime}}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        Duration:
                                    </td>
                                    <td width="50%">
                                        {{$monitoring->durationTime}}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">
                                        @if (count($monitors)==1)
                                            Monitor:
                                        @else
                                            Monitors:
                                        @endif
                                    </td>
                                    <td width="50%">
                                            @foreach ($monitors as $monitor)
                                                {{ $monitor->name }}<br>
                                            @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection