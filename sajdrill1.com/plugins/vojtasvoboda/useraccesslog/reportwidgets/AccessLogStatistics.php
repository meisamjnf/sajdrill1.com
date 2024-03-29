<?php

namespace VojtaSvoboda\UserAccessLog\ReportWidgets;

use App;
use ApplicationException;
use Exception;
use Backend\Classes\ReportWidgetBase;
use VojtaSvoboda\UserAccessLog\Models\AccessLog;

/**
 * Demands count overview widget.
 *
 * @package \VojtaSvoboda\UserAccessLog\ReportWidgets
 */
class AccessLogStatistics extends ReportWidgetBase
{
    /**
     * Renders the widget.
     */
    public function render()
    {
        try {
            $this->vars['all'] = $this->getCounts()['all'];
            $this->vars['counts'] = $this->getCounts()['counts'];

        } catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    /**
     * Define widget properties
     *
     * @return array
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title' => 'vojtasvoboda.useraccesslog::lang.reportwidgets.accesslogstatistics.title',
                'default' => 'Access statistics',
                'type' => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'vojtasvoboda.useraccesslog::lang.reportwidgets.accesslogstatistics.title_validation'
            ],
        ];
    }

    /**
     * Get data for widget
     *
     * @return array
     */
    public function getCounts()
    {
        $log = AccessLog::all()->groupBy('user_id');

        $counts = [];
        $all = 0;
        foreach ($log as $l) {
            $first = $l[0];
            $user = $first->user;
            $size = sizeof($l);
            $counts[] = [
                'size' => $size,
                'id' => $first->user_id,
                'name' => $user->username
            ];
            $all += $size;
        }

        return [
            'all' => $all,
            'counts' => $counts
        ];
    }

}
