@extends('layouts.app')
@section('title', 'Mutia | Data Contacts')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contacts</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contacts as $index => $contact)
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->message}}</td>
                                                <td>
                                                    <a href="{{route('contact.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                                                     | 
                                                    <a href="{{route('contact.destroy', $contact->id)}}"><i class="fas fa-trash"></i></i></a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{$contacts->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection