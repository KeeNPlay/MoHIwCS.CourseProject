<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/management.css">

    <div class="buttons-container">
        <button class="btn" id="addVehicle">Добавить технику</button>
        <button class="btn" id="deleteVehicle" disabled>Удалить</button>
        <button class="btn" id="changeObject" disabled>Перевод на др. объект</button>
        <button class="btn" id="clearChoose" disabled>Очистить выбор</button>
    </div>


    <!-- Вывод таблицы, как в ГСП можно реализовать, я думаю -->
    <div class="table-container">
        <h3>Список техники в автопарке</h3>
        <div class="table-placement">
            <table id="table" class="table">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th onclick="sortTable(2)">Название</th>
                    <th onclick="sortTable(3)">Гаражный номер</th>
                    <th onclick="sortTable(4)">Тип</th>
                    <th onclick="sortTable(5)">Объект</th>
                    <th>
                        <div class="search-container">
                            <label>
                                <input class="search" type="text" id="tableSearchInput" onkeyup="tableSearch()" placeholder="Поиск...">
                                <img class="search-icon" src="/img/icons/fi-rr-search.png" alt="search-icon">
                            </label>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody style="display: none">
                <tr class="table-row" data-type="Самосвал (20-25т)">
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td onclick="window.location.href = '/vehicle-card'"><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td onclick="window.location.href = '/vehicle-card'">КАМАЗ-65111-50</td>
                    <td onclick="window.location.href = '/vehicle-card'">102111</td>
                    <td onclick="window.location.href = '/vehicle-card'">Самосвал (20-25т)</td>
                    <td onclick="window.location.href = '/vehicle-card'">Харасавейское НГКМ</td>
                    <td onclick="window.location.href = '/vehicle-card'">
                        <div class="vehicle-status in-trip">
                            <span>В рейсе</span>
                        </div>
                    </td>
                </tr>
                <tr class="table-row" data-type="Самосвал (20-25т)">
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>103111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-trip">
                            <span>В рейсе</span>
                        </div>
                    </td>
                </tr>
                <tr class="table-row" data-type="Самосвал (20-25т)">
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>104111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-relocation">
                            <span>В перебазировке</span>
                        </div>
                    </td>
                </tr>
                <tr class="table-row" data-type="Самосвал (20-25т)">
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>105111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-trip">
                            <span>В рейсе</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>106111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-relocation">
                            <span>В перебазировке</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>107111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-idle">
                            <span>В простое</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>108111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-idle">
                            <span>В простое</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="checkbox" class="checkbox" onclick="Check()"></td>
                    <td><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                    <td>КАМАЗ-65111-50</td>
                    <td>109111</td>
                    <td>Самосвал (20-25т)</td>
                    <td>Харасавейское НГКМ</td>
                    <td>
                        <div class="vehicle-status in-idle">
                            <span>В простое</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
        </div>
        <div class="table-footer">
            <!-- Всего техники: count($table) (Как было сделано в проекте ГСП) -->
            <span>Всего техники: 12</span>
            <div class="pagination-container">
                <nav>
                    <ul class="pagination">
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="pop-up change-object-pop-up">
        <div class="pop-up-container">
            <div class="pop-up-body">
                <h3>Перевод на другой объект</h3>
                <hr>
                <form method="post">
                    <label for="oldObject">Текущий объект</label>
                    <input type="text" id="oldObject" value="Харасавейское НГКМ" readonly>
                    <label for="newObject">Перевести на...</label>
                    <input type="text" id="newObject" placeholder="Введите объект">
                    <button class="btn" type="submit">Применить</button>
                </form>
                <div class="pop-up-close change-object-pop-up-close">&#10006</div>
            </div>
        </div>
    </div>

    <div class="pop-up add-vehicle-pop-up">
        <div class="pop-up-container">
            <div class="pop-up-body">
                <h3>Добавление техники</h3>
                <hr>
                <form method="post">
                    <label for="oldObject">Название</label>
                    <input type="text" id="oldObject" placeholder="Введите название">
                    <label for="newObject">Тип</label>
                    <input type="text" id="newObject" placeholder="Введите тип">
                    <label for="newObject">Год выпуска</label>
                    <input type="text" id="newObject" placeholder="Введите год выпуска">
                    <label for="newObject">VIN-номер</label>
                    <input type="text" id="newObject" placeholder="Введите VIN-номер">
                    <label for="newObject">Объект</label>
                    <input type="text" id="newObject" placeholder="Введите объект">
                    <label for="newObject">Текущий статус</label>
                    <input type="text" id="newObject" placeholder="Введите текущий статус">
                    <button class="btn" type="submit">Применить</button>
                </form>
                <div class="pop-up-close add-vehicle-pop-up-close">&#10006</div>
            </div>
        </div>
    </div>

    <script src="/js/checkboxes.js"></script>
    <script src="/js/change-object-pop-up.js"></script>
    <script src="/js/add-vehicle-pop-up.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project\resources\views/management.blade.php ENDPATH**/ ?>