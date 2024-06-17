# marketplace


## Structure du projet

```
myapp/
│
├── app/
│   ├── Controllers/
│   │   ├── DashboardController.php
│   │   ├── ProductController.php
│   │   ├── InventoryController.php
│   │   ├── SalesController.php
│   │   ├── SettingsController.php
│   │   ├── FollowController.php
│   │   ├── AccountController.php
│   │   ├── HelpController.php
│   │   └── FaqController.php
│   │
│   ├── Models/
│   │   ├── Member.php
│   │   ├── Product.php
│   │   ├── Inventory.php
│   │   ├── Sale.php
│   │   └── Statistic.php
│   │
│   ├── Views/
│   │   ├── dashboard/
│   │   │   └── index.php
│   │   ├── product/
│   │   │   └── index.php
│   │   ├── inventory/
│   │   │   └── index.php
│   │   ├── sales/
│   │   │   └── index.php
│   │   ├── settings/
│   │   │   └── index.php
│   │   ├── suivis/
│   │   │   └── index.php
│   │   ├── account/
│   │   │   └── index.php
│   │   ├── help/
│   │   │   └── index.php
│   │   └── faq/
│   │       └── index.php
│   │
│   └── core/
│       ├── Database.php
│       ├── Controller.php
│       └── Model.php
│
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── scripts.js
│   └── index.php
│
└── config/
    └── config.php
```

### config.php : 

Le fichier config.php sert à centraliser la configuration de votre application, en particulier les paramètres qui peuvent être nécessaires dans plusieurs endroits de votre code.

