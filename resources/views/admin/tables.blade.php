@extends('admin_layout.master')

@section('title')
Tables
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
                                LISTES DES ETUDIANTS

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Bar -->
                                        <input type="text" id="searchInput" placeholder="Search by Last Name, First Name, Mat Number, Email, etc.">
                                        
                                        <!-- Table -->
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Mat Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="userData"></tbody>
                                             <!-- Add User Button -->
                                        <button id="addButton">Add User</button>
                                        </table>
                
                            </div>
                           
                        </div>
                    </div>
        </main>
@endsection