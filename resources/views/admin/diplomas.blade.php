@extends('admin_layout.master')

@section('title')
Dashboard
@endsection
@section('content')
        <main>
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            LISTES DES ETUDIANTS
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Search Bar -->
                                <input type="text" id="searchInput" placeholder="Search by Last Name, First Name, Mat Number, Email, etc." />
                                <!-- Table -->
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Field</th>
                                            <th>Speciality</th>
                                            <th>Academic Year</th>
                                            <th>Academic Level</th>
                                            <th>Mat Number</th>
                                            <th>Exam Type</th>
                                            <th>Complaint Type</th>
                                            <th>ECUE</th>
                                            <th>ECUE Sub</th>
                                            <th>Description</th>
                                            <th>Claimant First Name</th>
                                            <th>Claimant Last Name</th>
                                            <th>Claimant Phone</th>
                                            <th>Claimant Email</th>
                                            <th>Fiche Inscription</th>
                                            <th>Updated At</th>
                                            <th>Created At</th>
                                            <th>ID</th>
                                        </tr>
                                    </thead>
                                    <tbody id="complaintData"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
@endsection