ListWidget
==========

Show all values of a collection as a list.

+-------------+--------------------------------------------------------------------+
| type        | list                                                               |
+-------------+--------------------------------------------------------------------+
| require     | - property_                                                        |
|             | - item_property_                                                   |
+-------------+--------------------------------------------------------------------+
| option      | - separator_                                                       |
|             | - width_                                                           |
|             | - label_                                                           |
|             | - translationDomain_                                               |
+-------------+--------------------------------------------------------------------+
| class       | :class:`Enhavo\\Bundle\\AppBundle\\Table\\Widget\\ListWidget`      |
+-------------+--------------------------------------------------------------------+


Require
-------

.. include:: /reference/table-widget/option/property.rst

.. _item_property:

item_property
~~~~~~~~~~~~~

**type**: `string`

Define the property of the items which should be used to display inside the collection.

.. code-block:: yaml

    buttons:
        myWidget:
            property: groups
            item_property: name

Option
------

.. include:: /reference/table-widget/option/separator.rst

.. include:: /reference/table-widget/option/width.rst

.. include:: /reference/table-widget/option/label.rst

.. include:: /reference/table-widget/option/translationDomain.rst

