<?php
namespace App\Http;

use Alexusmai\LaravelFileManager\Services\ConfigService\ConfigRepository;
use Auth;
class FileManagerConfig implements ConfigRepository
{
    // implement all methods from interface
    
    /**
     * Get disk list
     *
     * ['public', 'local', 's3']
     *
     * @return array
     */
    public function getDiskList(): array
    {
        return 1;
        if (Auth::id() === 1) {
            return [
                ['public'],
            ];
        }else{
            return [
                ['public'],
            ];
        }
        
        return ['public'];
    }
}