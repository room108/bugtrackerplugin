<?php

	/**
	 * action components for the tracplugin module
	 */
	class tracpluginActionComponents extends TBGActionComponent
	{
        public function componentSettings()
        {
            $projects = TBGProject::getAll();
            $this->projects = $projects;
        }
	}

