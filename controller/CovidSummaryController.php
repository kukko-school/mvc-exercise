<?php
require_once(__DIR__ . '/AbstractBaseController.php');
require_once(__DIR__ . '/../service/CovidService.php');

class CovidSummaryController extends AbstractBaseController
{
    public function run()
    {
        $summary = CovidService::getSummary();
        ?>
        <table>
            <tr>
                <th>
                    Ország
                </th>
                <th>
                    Új igazolt
                </th>
                <th>
                    Összes igazolt
                </th>
                <th>
                    Új haláleset
                </th>
                <th>
                    Összes
                </th>
                <th>
                    Új gyógyult
                </th>
                <th>
                    Összes gyógyult
                </th>
            </tr>
            <?php
            foreach ($summary['Countries'] as $key => $country) {
                ?>
                    <tr>
                        <td>
                            <?php
                                echo $country['Country'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['NewConfirmed'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['TotalConfirmed'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['NewDeaths'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['TotalDeaths'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['NewRecovered'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $country['TotalRecovered'];
                            ?>
                        </td>
                    </tr>
                <?php
            }
            ?>
        </table>
        <?php
        return $summary;
    }
}
