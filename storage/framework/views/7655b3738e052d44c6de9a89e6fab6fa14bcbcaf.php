<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/management.css">

    <div class="buttons-container">
        <button class="btn" id="addVehicle">Добавить технику</button>
        <button class="btn" id="deleteVehicle" onclick="axiosDelete()" disabled>Удалить</button>
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
                <?php $__currentLoopData = $autoparkList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-row" data-type="Самосвал (20-25т)">
                        <td><input type="checkbox" id="<?php echo e($item->garageNumber); ?>" class="checkbox" onclick="Check()"></td>
                        <td onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>"><img src="/img/icons/vehicle_photo.png" alt="vehicle-icon"></td>
                        <td onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>"><?php echo e($item->vehicleName); ?></td>
                        <td onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>"><?php echo e($item->garageNumber); ?></td>
                        <td onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>"><?php echo e($item->vahicleType); ?></td>
                        <td class="vehicle-object" onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>"><?php echo e($item->vehicleObject); ?></td>
                        <td onclick="window.location.href = '/vehicle-card/'+<?php echo e($item->garageNumber); ?>">
                            <?php if($item->status == 'В рейсе'): ?>
                                <div class="vehicle-status in-trip">
                                    <span>В рейсе</span>
                                </div>
                            <?php elseif($item->status == 'В перебазировке'): ?>
                                <div class="vehicle-status in-relocation">
                                    <span>В перебазировке</span>
                                </div>
                            <?php elseif($item->status == 'В техн. простое'): ?>
                                <div class="vehicle-status in-idle">
                                    <span>В техн. простое</span>
                                </div>
                            <?php elseif($item->status == 'В простое б. в.'): ?>
                                <div class="vehicle-status in-idle">
                                    <span>В простое б.в.</span>
                                </div>
                            <?php elseif($item->status == 'В ремонте'): ?>
                                <div class="vehicle-status on-repair">
                                    <span>В ремонте</span>
                                </div>
                            <?php elseif($item->status == 'На хранении (И)'): ?>
                                <div class="vehicle-status in-storage">
                                    <span>На хранении (И)</span>
                                </div>
                            <?php elseif($item->status == 'На хранении (НИ)'): ?>
                                <div class="vehicle-status in-storage">
                                    <span>На хранении (НИ)</span>
                                </div>
                            <?php else: ?>
                                <div class="vehicle-status other">
                                    <span>Другое</span>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <hr>
        </div>
        <div class="table-footer">
            <!-- Всего техники: count($table) (Как было сделано в проекте ГСП) -->
            <span>Всего техники: <?php echo e(count($autoparkList)); ?></span>
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
                <form>
                    <label for="oldObject">Текущий объект</label>
                    <input type="text" id="oldObject" value="Харасавейское НГКМ" readonly>
                    <label for="newObject">Перевести на...</label>
                    <input type="text" id="newObject" placeholder="Введите объект">
                    <button class="btn" onclick="axiosUpdateObject()">Применить</button>
                <div class="pop-up-close change-object-pop-up-close">&#10006</div>
                </form>
            </div>
        </div>
    </div>

    <div class="pop-up add-vehicle-pop-up">
        <div class="pop-up-container">
            <div class="pop-up-body">
                <h3>Добавление техники</h3>
                <hr>
                <form action="/axiosInsert" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" id="сompany" name="company" value="<?php echo e($company); ?>" hidden>
                    <label for="vehicleName">Название</label>
                    <input type="text" id="vehicleName" name="vehicleName" placeholder="Введите название">
                    <label for="vehicleType">Тип</label>
                    <input type="text" id="vehicleType" name="vehicleType" placeholder="Введите тип">
                    <label for="garageNumber">Гаражный номер</label>
                    <input type="text" id="garageNumber" name="garageNumber" placeholder="Введите гаражный номер">
                    <label for="vehicleVin">VIN-номер</label>
                    <input type="text" id="vehicleVin" name="vehicleVin" placeholder="Введите VIN-номер">
                    <label for="vehicleObject">Объект</label>
                    <input type="text" id="vehicleObject" name="vehicleObject" placeholder="Введите объект">
                    <label for="vehicleArea">Участок</label>
                    <input type="text" id="newObject" name="newObject" placeholder="Введите участок">
                    <label for="vehicleStatus">Текущий статус</label>
                    <input type="text" id="vehicleStatus" name="vehicleStatus" placeholder="Введите текущий статус">
                    <button class="btn" type="submit">Применить</button>
                </form>
                <div class="pop-up-close add-vehicle-pop-up-close">&#10006</div>
            </div>
        </div>
    </div>

    <script src="/js/checkboxes.js"></script>
    <script src="/js/change-object-pop-up.js"></script>
    <script src="/js/add-vehicle-pop-up.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project-1\resources\views/management.blade.php ENDPATH**/ ?>