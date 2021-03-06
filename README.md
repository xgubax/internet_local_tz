Задание
---

Существует шахматная доска опредленного размера. На эту доску можно добавлять различные фигуры (пешки/ферзи/короли). После добавления фигуры можно перемещать или удалять. В любой момент времени состояние доски можно сохранить в хранилище (или загрузить из него): в файл или в redis.


Необходимо реализовать описанную выше функциональность. При реализации учтите, что фигур может быть больше, чем три вида; виды хранилищ могут меняться. Добавьте возможность вызова пользовательского кода в момент, когда на доску добавляется фигура определенного типа/фигура любого типа (например, выводить текстовое сообщение при добавлении пешки / при добавлении любой фигуры).

Установка
---

После клонирования кода из репозитория выполнить `composer update`.

Добавляем новую фигуру
---

Необходимо реализовать класс-стратегию, котоаря инкапсулирует поведение фигуры.

Класс должен имплементить интерфейс `ChessDomain\FigureStrategy\FigureStrategyInterface`.

Предположим был реализован класс `HorseStrategy`. Теперь чтобы получить эту фигуру достаточно сделать вызов в приложении `$horse = $container->get('chess_figure_service')->createBlackHorse();`

Контейнер
---

Для проброса зависимостей был добавлен простенький контейнер, конфиг лежит тут `src/App/Resources/config/container.php`.

Хранилище для доски
---

Выбор способа хранения доски определяется в конфиге в сервисе `storage` - где следует указать какой сервис использовать - редис или файл.

Выполнение клиентского кода
---

Чтобы выполнить клиентский под при добавлении фигуры на доску, следует реализовать специальный класс лисенер, который должен имплементить интерфейс `ChessDomain\Notifier\ListenerInterface`.

Далее этот класс через конфигурацию контейнера следует добавить к обработчику событий (сервис `chess_notifier`).

Пример использования
---

Пример использования домена и приложения показан в файле `public/index.php`
