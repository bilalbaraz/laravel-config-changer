<?php

namespace Bilalbaraz\LaravelEnvChanger\Console;

use Illuminate\Console\Command;

/**
 * Class ChangeEnvCommand
 * @package App\Console\Commands
 */
class ChangeEnvCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'env:change {name} {value}';

    /**
     * @var string
     */
    protected $description = 'Change value of variables into .env';

    /**
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $value = $this->argument('value');

        $this->setEnvironmentValue($name, $value);

        $this->info('Variable has been changed!');
    }

    /**
     * @param string $name
     * @param string $value
     */
    private function setEnvironmentValue($name, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name . '=' . env($name), $name . '=' . $value, file_get_contents($path)
            ));
        }
    }
}
