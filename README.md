# Bacon Ipsum

![BaconIpsum](bacon-ipsum.jpg)

The Bacon Ipsum plugin for [Fansoro](https://github.com/fansoro/fansoro) will generate you steaming piles of glorious [bacon ipsum](http://baconipsum.com/).


## Installation
See [this instruction](http://fansoro.org/documentation/plugins/plugins-installation)

## Usage in page content

Simple usage

```
{bacon}
```

Set how many paragraphs of bacon ipsum to generate.

```
{bacon p=5}
```

Set type of bacon ipsum to generate.

```
{bacon p=5 type=meat-and-filler}
```

Start the first paragraph with ‘Bacon ipsum dolor sit amet’

```
{bacon p=5 type=meat-and-filler start_with_lorem=1}
```

Set number of sentences to generate.

```
{bacon sentences=3}
```

Set format to return.

```
{bacon format=json}
```

## Usage in template

Simple usage

```
{bacon()}
```

Usage with options

```smarty
{bacon(['p' => 5, 'type' => 'meat-and-filler', 'start_with_lorem' => '1', 'sentences' => '3', 'format' => 'json'])}
```

## Options

| name  | value | description |
|---|---|---|
| enabled | true | or `false` to disable the plugin |
| type | all-meat | `all-meat` for meat only or `meat-and-filler` for meat mixed with miscellaneous ‘lorem ipsum’ filler. |
| p | 1 | optional number of paragraphs, defaults to `1`. |
| sentences | 0 | number of sentences (this overrides paragraphs) |
| start_with_lorem | 0 | optional pass `1` to start the first paragraph with ‘Bacon ipsum dolor sit amet’. |
| format | text | Format `text` (default), json, or ‘html’ |

## License
See  [LICENSE](https://github.com/fansoro/fansoro-plugin-bacon-ipsum/blob/master/LICENSE)
