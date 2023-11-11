@extends('admin_layout.master')

@section('title')
Certificate Form
@endsection
@section('content')

    <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">LISTES DES DEMANDES DE BULLETIN FAITES PAR LES ETUDIANTS</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Search Bar -->
                        <input type="text" id="searchInput" placeholder="Search by Last Name, First Name, Mat Number, Email, etc.">
                        <!-- Table -->
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Claimant First Name</th>
                                    <th>Claimant Last Name</th>
                                    <th>Claimant Phone</th>
                                    <th>Claimant Email</th>
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
                                    <th>Fiche Inscription</th>
                                    <th>Updated At</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody id="complaintData"></tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
@endsection