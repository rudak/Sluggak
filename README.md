# Sluggak
Simple static slug library

### How it works

Just include the namespace

    use Rudak\Sluggak\Sluggak;

Just use the slugThis static method like this

    echo Sluggak::slugThis("J'ai vraiment de l'énergie à vendre !");
    // ==> j-ai-vraiment-de-l-energie-a-vendre

You can also change the separator before make the job

    Sluggak::setSeparator('_');
    echo Sluggak::slugThis("J'ai vraiment de l'énergie à vendre !");

You can also chain it like this

    echo Sluggak::getInstance()->setSeparator('_')->slugThis("J'ai vraiment de l'énergie à vendre !");
