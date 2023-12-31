
@extends('admin_layout.master')

@section('title')
Dashboard
@endsection
@section('content')    
    <div class="container">
        <h1>Récapitulatif de la Réclamation</h1>
        <input type="text" id="search-input" placeholder="Rechercher par nom, prénom, matricule ou unité d'enseignement (ECUE)">
        <div id="summary" class="total-container">
            <!-- Les totaux des réclamations par ECUE seront affichés ici -->
        </div>
        <canvas id="pie-chart" width="400" height="400"></canvas>
        <table>
            <thead>
                <tr>
                    <th>Unité d'Enseignement (ECUE)</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Les détails des totaux par ECUE seront affichés ici -->
            </tbody>
        </table>
        <ul id="reclamation-details">
            <!-- Les détails de la réclamation seront affichés ici -->
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"></script>
    <script>
        // URL de l'API
        var apiUrl = 'http://127.0.0.1:8000/api/complaints';

        // Sélectionnez l'élément HTML où vous souhaitez afficher les détails de la réclamation
        var reclamationDetails = document.getElementById("reclamation-details");

        // Sélectionnez l'élément HTML de l'entrée de recherche
        var searchInput = document.getElementById("search-input");

        // Sélectionnez l'élément HTML pour afficher le résumé
        var summary = document.getElementById("summary");

        // Sélectionnez l'élément HTML pour le tableau des totaux par ECUE
        var tableBody = document.getElementById("table-body");

        // Effectuez une requête GET vers l'API
        fetch(apiUrl)
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                // Afficher le nombre total de réclamations
                summary.textContent = "Nombre total de réclamations : " + data.length;

                // Traitez les données JSON reçues de l'API
                displayReclamations(data);
            })
            .catch(function(error) {
                console.error('Une erreur s\'est produite lors de la récupération des données depuis l\'API :', error);
            });

        // Fonction pour afficher les réclamations
        function displayReclamations(reclamations) {
            // Créez un objet pour stocker le décompte des réclamations par ECUE
            var ecueCount = {};

            reclamations.forEach(function(reclamation) {
                // Mettez à jour le décompte des réclamations par ECUE
                if (ecueCount[reclamation.ecue_sub]) {
                    ecueCount[reclamation.ecue_sub]++;
                } else {
                    ecueCount[reclamation.ecue_sub] = 1;
                }

                var listItem = document.createElement("li");
                listItem.innerHTML = "<strong>ID de la réclamation :</strong> " + reclamation.id + "<br>" +
                                      "<strong>Nom de l'étudiant :</strong> " + reclamation.claimant_firstname + " " + reclamation.claimant_lastname + "<br>" +
                                      "<strong>Année académique :</strong> " + reclamation.ac_year + "<br>" +
                                      "<strong>Niveau académique :</strong> " + reclamation.ac_level + "<br>" +
                                      "<strong>Matricule :</strong> " + (reclamation.mat || "Non spécifié") + "<br>" +
                                      "<strong>Filière :</strong> " + reclamation.field + "<br>" +
                                      "<strong>Spécialité :</strong> " + reclamation.speciality + "<br>" +
                                      "<strong>Session :</strong> " + reclamation.exam_type + "<br>" +
                                      "<strong>Motif :</strong> " + reclamation.complain_type + "<br>" +
                                      "<strong>ECUE :</strong> " + reclamation.ecue + "<br>" +
                                      "<strong>Unité d'Enseignement :</strong> " + reclamation.ecue_sub + "<br>" +
                                      "<strong>Description :</strong> " + reclamation.description + "<br>" +
                                      "<strong>Date de création :</strong> " + new Date(reclamation.created_at).toLocaleString();
                reclamationDetails.appendChild(listItem);
            });

            // Affichez les totaux des réclamations par ECUE dans le tableau
            for (var ecue in ecueCount) {
                var ecueTotal = ecueCount[ecue];
                var row = document.createElement("tr");
                row.innerHTML = "<td>" + ecue + "</td><td>" + ecueTotal + "</td>";
                tableBody.appendChild(row);
            }

            // Sélectionnez l'élément HTML pour le graphique circulaire
            var pieChart = document.getElementById("pie-chart").getContext("2d");

            // Créez un tableau pour stocker les données du graphique
            var chartData = [];
            var chartLabels = [];

            // Remplissez les données du graphique avec les totaux des réclamations par ECUE
            for (var ecue in ecueCount) {
                chartLabels.push(ecue);
                chartData.push(ecueCount[ecue]);
            }

            // Créez le graphique circulaire
            var myPieChart = new Chart(pieChart, {
                type: 'pie',
                data: {
                    labels: chartLabels,
                    datasets: [{
                        data: chartData,
                        backgroundColor: getRandomColors(chartData.length), // Utilisez la fonction getRandomColors pour obtenir des couleurs aléatoires
                    }],
                },
                options: {
                    responsive: true,
                    plugins: {
                        datalabels: {
                            color: 'white',
                            font: {
                                size: 12,
                                weight: 'bold'
                            },
                            formatter: function(value, context) {
                                return chartLabels[context.dataIndex] + ": " + value;
                            }
                        }
                    },
                    radius: '40%' // Réduire la taille du secteur circulaire
                },
            });
        }

        // Fonction pour obtenir des couleurs aléatoires pour le graphique circulaire
        function getRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                var color = "#" + Math.floor(Math.random() * 16777215).toString(16);
                colors.push(color);
            }
            return colors;
        }
    </script>
@endsection