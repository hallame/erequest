@extends('admin_layout.master')

@section('title')
Dashboard
@endsection
@section('content')       
        <main>
                    <div class="container-fluid px-4">
                        <!-- <h1 class="mt-4">Dashboard</h1> -->
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        </ol>


                    <div class="card mb-4">
                    <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                MESSAGES  DES ETUDIANTS

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Search Bar -->
                            <input type="text" id="searchInput" placeholder="Search by Last Name, First Name, Mat Number, Email, etc.">
                                    <!-- Table -->
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Sender First Name</th>
                                                <th>Sender Last Name</th>
                                                <th>Sender Email</th>
                                                <th>Sender Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="messagesData"></tbody>
                                    </table>
                            
                        </div>
                           
                    </div>
                </div>
        </main>
@endsection