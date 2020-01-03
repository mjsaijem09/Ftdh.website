/**
 * Handle dynamic calls to class methods.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
public function __call($method, $parameters)
{
    $rule = Str::snake(substr($method, 8));

    if (isset($this->extensions[$rule])) {
        return $this->callExtension($rule, $parameters);
    }

    throw new BadMethodCallException(sprintf(
        'Method %s::%s does not exist.', static::class, $method
    ));
}