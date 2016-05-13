Yii2 Editable Widget
=====================

Renders a [X-Editable Input](http://vitalets.github.io/x-editable/index.html) allowing to use the amazing inline capabilities of [X-Editable Plugin](http://vitalets.github.io/x-editable/index.html). 

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-editable/v/stable)](https://packagist.org/packages/yii2mod/yii2-editable) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-editable/downloads)](https://packagist.org/packages/yii2mod/yii2-editable) [![License](https://poser.pugx.org/yii2mod/yii2-editable/license)](https://packagist.org/packages/yii2mod/yii2-editable)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-editable "*"
```

or add

```json
"yii2mod/yii2-editable": "*"
```

to the require section of your composer.json.


Usage Editable column
---------------------------------------
1) In your gridview columns section
```php
 [
    'class' => EditableColumn::className(),
    'attribute' => 'username',
    'url' => ['change-username'],
 ],
```
2) And add to your controller
```php
 public function actions()
      {
          return [
              'change-username' => [
                  'class' => EditableAction::className(),
                  'modelClass' => UserModel::className(),
                  'forceCreate' => false
              ]
          ];
      }
```
Usage Editable widget
---------------------------------

1) As a widget with a model

```php
\yii2mod\editable\Editable::widget( [
    'model' => $model,
    'attribute' => 'firstName',
    'url' => '/profile/update'
]);
```

2) With ActiveForm

```php
echo $form->field($model, "firstName")->widget(\yii2mod\editable\Editable::className(), [
    'url' => '/profile/update',
    'mode' => 'popup'
]);

```
