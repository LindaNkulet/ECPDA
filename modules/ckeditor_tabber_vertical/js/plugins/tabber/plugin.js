( function() {
  'use strict';

  // Register plugin
  CKEDITOR.plugins.add('tabber_vertical', {
    // hidpi: true,
    //lang: 'en,en-au,en-ca,en-gb',
    icons: 'tabber_vertical',
    init: function (editor) {
      // Add single button
      editor.ui.addButton('tabber_vertical', {
        command: 'addVerticalTabCmd',
        icon: this.path + 'icons/tabber_vertical.png',
        label: Drupal.t('Insert vertical tabs')
      });

      // Add CSS for edition state
      var cssPath = this.path + 'tabber.css';
 
      editor.on('mode', function () {
        
        if (editor.mode == 'wysiwyg') {
          this.document.appendStyleSheet(cssPath);
        }
      });

      // Prevent nesting DLs by disabling button
      editor.on('selectionChange', function (evt) {
        if (editor.readOnly)
          return;
        var command = editor.getCommand('addVerticalTabCmd'),
          element = evt.data.path.lastElement && evt.data.path.lastElement.getAscendant('dl', true);
        // if (element)
        //   command.setState(CKEDITOR.TRISTATE_DISABLED);
        // else
        //   command.setState(CKEDITOR.TRISTATE_OFF);
      });

      var allowedContent = 'dl dd dt(!ckeditor-tabber-vertical)';

      // Command to insert initial structure
      editor.addCommand('addVerticalTabCmd', {
        allowedContent: allowedContent,

        exec: function (editor) {
          var dl = new CKEDITOR.dom.element.createFromHtml(
            '<dl class="ckeditor-tabber-vertical">' +
              '<dt>Tab title 1</dt>' +
              '<dd><p>Tab content 1.</p></dd>' +
              '<dt>Tab title 2</dt>' +
              '<dd><p>Tab content 2.</p></dd>' +
            '</dl>');
          editor.insertElement(dl);
        }
      });

      // Other command to manipulate tabs
      editor.addCommand('addVerticalTabBefore', {
        allowedContent: allowedContent,

        exec: function (editor) {
          var element = editor.getSelection().getStartElement();
          var newHeader = new CKEDITOR.dom.element.createFromHtml('<dt>New tab title</dt>');
          var newContent = new CKEDITOR.dom.element.createFromHtml('<dd><p>New tab content</p></dd>');
          if (element.getAscendant('dd', true)) {
            element = element.getAscendant('dd', true).getPrevious();
          }
          else {
            element = element.getAscendant('dt', true);
          }
          newHeader.insertBefore(element);
          newContent.insertBefore(element);
        }
      });
      editor.addCommand('addVerticalTabAfter', {
        allowedContent: allowedContent,
        
        exec: function (editor) {
          var element = editor.getSelection().getStartElement();
          var newHeader = new CKEDITOR.dom.element.createFromHtml('<dt>New tab title</dt>');
          var newContent = new CKEDITOR.dom.element.createFromHtml('<dd><p>New tab content</p></dd>');
          if (element.getAscendant('dt', true)) {
            element = element.getAscendant('dt', true).getNext();
          }
          else {
            element = element.getAscendant('dd', true);
          }
          newContent.insertAfter(element);
          newHeader.insertAfter(element);
        }
      });
      editor.addCommand('removeVerticalTab', {
        exec: function (editor) {
          var element = editor.getSelection().getStartElement();
          if (element.getAscendant('dt', true)) {
            var a = element.getAscendant('dt', true);
            a.getNext().remove();
            a.remove();
          }
          else {
            var a = element.getAscendant('dd', true);
            if(a) {
              a.getPrevious().remove();
              a.remove();
            } else {
              element.remove();
            }
          }
        }
      });

      // Context menu
      if (editor.contextMenu) {
        editor.addMenuGroup('tabberVerticalGroup');
        editor.addMenuItem('tabVerticalBeforeItem', {
          label: Drupal.t('Add vertical tab before'),
          icon: this.path + 'icons/tabber_vertical.png',
          command: 'addVerticalTabBefore',
          group: 'tabberVerticalGroup'
        });
        editor.addMenuItem('tabVerticalAfterItem', {
          label: Drupal.t('Add vertical tab after'),
          icon: this.path + 'icons/tabber_vertical.png',
          command: 'addVerticalTabAfter',
          group: 'tabberVerticalGroup'
        });
        editor.addMenuItem('removeVerticalTab', {
          label: Drupal.t('Remove vertical tab'),
          icon: this.path + 'icons/tabber_vertical.png',
          command: 'removeVerticalTab',
          group: 'tabberVerticalGroup'
        });

        editor.contextMenu.addListener(function (element) {
          var parentEl = element.getAscendant('dl', true);
          if (parentEl && parentEl.hasClass('ckeditor-tabber-vertical')) {
            return {
              tabBeforeItem: CKEDITOR.TRISTATE_OFF,
              tabAfterItem: CKEDITOR.TRISTATE_OFF,
              removeTab: CKEDITOR.TRISTATE_OFF
            };
          }
        });
      }
    }
  });
} )();