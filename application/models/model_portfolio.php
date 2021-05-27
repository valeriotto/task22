<?php
class Model_Portfolio extends Model
{
    public function get_data()
    {
        $data = array(
            array(
                'year' => '2020',
                'name' => 'name',
                'description' => 'description'
            ),
            array(
                'year' => '2021',
                'name' => 'name',
                'description' => 'description'
            ),
            array(
                'year' => '2022',
                'name' => 'name',
                'description' => 'description'
            )
        );
        return $data;
    }
}
