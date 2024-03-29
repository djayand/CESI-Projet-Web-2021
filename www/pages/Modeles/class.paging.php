<?php

class paginate
{
    private $db;

    function __construct($DB_con)
    {
        $this->db = $DB_con;
    }

    public function dataview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) { /*  <td><?php echo $row['ID_stage']; ?></td> */
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['Descriptif_stage']; ?></td>
                    <td><?php echo $row['Commentaire_stage']; ?></td>
                    <td><?php echo $row['Note_etudiant_stage']; ?></td>
                    <td><?php echo $row['Duree_stage']; ?></td>
                    <td><?php echo $row['Base_remuneration']; ?></td>
                    <td><?php echo $row['Date_offre']; ?></td>
                    <td><?php echo $row['Type_promos']; ?></td>
                    <td><?php echo $row['Nbre_places_offertes']; ?></td>
                    <td><?php echo $row['ID_Entreprise']; ?></td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td>Nothing here...</td>
            </tr>
        <?php
        }
    }

    public function paging($query, $records_per_page)
    {
        $starting_position = 0;
        if (isset($_GET["page_no"])) {
            $starting_position = ($_GET["page_no"] - 1) * $records_per_page;
        }
        $query2 = $query . " limit $starting_position,$records_per_page";
        return $query2;
        
    }

    public function paginglink($query, $records_per_page)
    {

        $self = $_SERVER['PHP_SELF'];

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $total_no_of_records = $stmt->rowCount();

        if ($total_no_of_records > 0) {
        ?><tr>
                <td><?php
                    $total_no_of_pages = ceil($total_no_of_records / $records_per_page);
                    $current_page = 1;

                    if (isset($_GET["page_no"])) {
                        $current_page = $_GET["page_no"];
                    }

                    if ($current_page != 1) {
                        $previous = $current_page - 1;
                        echo "<a href='" . $self . "?page_no=1'>First</a>&nbsp;&nbsp;";
                        echo "<a href='" . $self . "?page_no=" . $previous . "'>Previous</a>&nbsp;&nbsp;";
                    }
                    for ($i = 1; $i <= $total_no_of_pages; $i++) {
                        if ($i == $current_page) {
                            echo "<a href='" . $self . "?page_no=" . $i . "'>" . $i . "</a>&nbsp;&nbsp;";
                        } else {
                            echo "<a href='" . $self . "?page_no=" . $i . "'>" . $i . "</a>&nbsp;&nbsp;";
                        }
                    }
                    if ($current_page != $total_no_of_pages) {
                        $next = $current_page + 1;
                        echo "<a href='" . $self . "?page_no=" . $next . "'>Next</a>&nbsp;&nbsp;";
                        echo "<a href='" . $self . "?page_no=" . $total_no_of_pages . "'>Last</a>&nbsp;&nbsp;";
                    }
                    ?></td>
            </tr><?php
                }
            }
        }
