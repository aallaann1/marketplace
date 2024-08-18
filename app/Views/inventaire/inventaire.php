<div class="inventory-container">
    <h2>Inventaire</h2>
    <div class="search-bar">
        <select>
            <option value="">Taille</option>
            <!-- Ajoutez d'autres tailles ici -->
        </select>
    </div>
    <div class="inventory-table">
        <table>
            <thead>
            <tr>
                <th>Produit</th>
                <th>Taille</th>
                <th>Quantité</th>
                <th>Prix A</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Prix V</th>
                <th>Statut</th>
                <th>Suivi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dunk low clear jade</td>
                <td>39</td>
                <td>1</td>
                <td>100€</td>
                <td>10/12/23</td>
                <td>Jd sport</td>
                <td>150€</td>
                <td><span class="status received">reçu</span></td>
                <td><button class="follow-button">suivre</button></td>
            </tr>
            <tr>
                <td>Adidas campus 00s dark green</td>
                <td>37</td>
                <td>2</td>
                <td>85€</td>
                <td>13/06/24</td>
                <td>Adidas</td>
                <td>110€</td>
                <td><span class="status pending">en attente</span></td>
                <td><button class="follow-button">suivre</button></td>
            </tr>
            <!-- Ajoutez plus de lignes ici si nécessaire -->
            </tbody>
        </table>
    </div>
</div>

<!-- Lien vers le fichier CSS -->
<link rel="stylesheet" href="../../../public/css/styles-inventaire.css">
