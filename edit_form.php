<?php

defined('MOODLE_INTERNAL') || die();

class block_course_gallery_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        // Seção para as configurações.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        $mform->addElement('text', 'config_gallery_title', get_string('add_title', 'block_course_gallery'));
        $mform->setDefault('config_gallery_title', 'Cursos abertos do IFRN');
        $mform->setType('config_gallery_title', PARAM_TEXT);

        $mform->addElement('text', 'config_max_courses', get_string('max_courses', 'block_course_gallery'));
        $mform->setType('config_max_courses', PARAM_INT);
        $mform->setDefault('config_max_courses', 9);
    }
}