<?php

namespace HieuLe\PhpBootstrapper;

use HieuLe\PhpHtmlDom\Node\Element;

/**
 * Generate icons
 *
 * @author TrungHieu
 */
class Icon
{
    // Glypthicon icons

    const GLYPH_ADJUST = "adjust";
    const GLYPH_ALIGN_CENTER = "align-center";
    const GLYPH_ALIGN_JUSTIFY = "align-justify";
    const GLYPH_ALIGN_LEFT = "align-left";
    const GLYPH_ALIGN_RIGHT = "align-right";
    const GLYPH_ARROW_DOWN = "arrow-down";
    const GLYPH_ARROW_LEFT = "arrow-left";
    const GLYPH_ARROW_RIGHT = "arrow-right";
    const GLYPH_ARROW_UP = "arrow-up";
    const GLYPH_ASTERISK = "asterisk";
    const GLYPH_BACKWARD = "backward";
    const GLYPH_BAN_CIRCLE = "ban-circle";
    const GLYPH_BARCODE = "barcode";
    const GLYPH_BELL = "bell";
    const GLYPH_BOLD = "bold";
    const GLYPH_BOOK = "book";
    const GLYPH_BOOKMARK = "bookmark";
    const GLYPH_BRIEFCASE = "briefcase";
    const GLYPH_BULLHORN = "bullhorn";
    const GLYPH_CALENDAR = "calendar";
    const GLYPH_CAMERA = "camera";
    const GLYPH_CERTIFICATE = "certificate";
    const GLYPH_CHECK = "check";
    const GLYPH_CHEVRON_DOWN = "chevron-down";
    const GLYPH_CHEVRON_LEFT = "chevron-left";
    const GLYPH_CHEVRON_RIGHT = "chevron-right";
    const GLYPH_CHEVRON_UP = "chevron-up";
    const GLYPH_CIRCLE_ARROW_DOWN = "circle-arrow-down";
    const GLYPH_CIRCLE_ARROW_LEFT = "circle-arrow-left";
    const GLYPH_CIRCLE_ARROW_RIGHT = "circle-arrow-right";
    const GLYPH_CIRCLE_ARROW_UP = "circle-arrow-up";
    const GLYPH_CLOUD = "cloud";
    const GLYPH_CLOUD_DOWNLOAD = "cloud-download";
    const GLYPH_CLOUD_UPLOAD = "cloud-upload";
    const GLYPH_COG = "cog";
    const GLYPH_COLLAPSE_DOWN = "collapse-down";
    const GLYPH_COLLAPSE_UP = "collapse-up";
    const GLYPH_COMMENT = "comment";
    const GLYPH_COMPRESSED = "compressed";
    const GLYPH_COPYRIGHT_MARK = "copyright-mark";
    const GLYPH_CREDIT_CARD = "credit-card";
    const GLYPH_CUTLERY = "cutlery";
    const GLYPH_DASHBOARD = "dashboard";
    const GLYPH_DOWNLOAD = "download";
    const GLYPH_DOWNLOAD_ALT = "download-alt";
    const GLYPH_EARPHONE = "earphone";
    const GLYPH_EDIT = "edit";
    const GLYPH_EJECT = "eject";
    const GLYPH_ENVELOPE = "envelope";
    const GLYPH_EURO = "euro";
    const GLYPH_EXCLAMATION_SIGN = "exclamation-sign";
    const GLYPH_EXPAND = "expand";
    const GLYPH_EXPORT = "export";
    const GLYPH_EYE_CLOSE = "eye-close";
    const GLYPH_EYE_OPEN = "eye-open";
    const GLYPH_FACETIME_VIDEO = "facetime-video";
    const GLYPH_FAST_BACKWARD = "fast-backward";
    const GLYPH_FAST_FORWARD = "fast-forward";
    const GLYPH_FILE = "file";
    const GLYPH_FILM = "film";
    const GLYPH_FILTER = "filter";
    const GLYPH_FIRE = "fire";
    const GLYPH_FLAG = "flag";
    const GLYPH_FLASH = "flash";
    const GLYPH_FLOPPY_DISK = "floppy-disk";
    const GLYPH_FLOPPY_OPEN = "floppy-open";
    const GLYPH_FLOPPY_REMOVE = "floppy-remove";
    const GLYPH_FLOPPY_SAVE = "floppy-save";
    const GLYPH_FLOPPY_SAVED = "floppy-saved";
    const GLYPH_FOLDER_CLOSE = "folder-close";
    const GLYPH_FOLDER_OPEN = "folder-open";
    const GLYPH_FONT = "font";
    const GLYPH_FORWARD = "forward";
    const GLYPH_FULLSCREEN = "fullscreen";
    const GLYPH_GBP = "gbp";
    const GLYPH_GIFT = "gift";
    const GLYPH_GLASS = "glass";
    const GLYPH_GLOBE = "globe";
    const GLYPH_HAND_DOWN = "hand-down";
    const GLYPH_HAND_LEFT = "hand-left";
    const GLYPH_HAND_RIGHT = "hand-right";
    const GLYPH_HAND_UP = "hand-up";
    const GLYPH_HDD = "hdd";
    const GLYPH_HD_VIDEO = "hd-video";
    const GLYPH_HEADER = "header";
    const GLYPH_HEADPHONES = "headphones";
    const GLYPH_HEART = "heart";
    const GLYPH_HEART_EMPTY = "heart-empty";
    const GLYPH_HOME = "home";
    const GLYPH_IMPORT = "import";
    const GLYPH_INBOX = "inbox";
    const GLYPH_INDENT_LEFT = "indent-left";
    const GLYPH_INDENT_RIGHT = "indent-right";
    const GLYPH_INFO_SIGN = "info-sign";
    const GLYPH_ITALIC = "italic";
    const GLYPH_LEAF = "leaf";
    const GLYPH_LINK = "link";
    const GLYPH_LIST = "list";
    const GLYPH_LIST_ALT = "list-alt";
    const GLYPH_LOCK = "lock";
    const GLYPH_LOG_IN = "log-in";
    const GLYPH_LOG_OUT = "log-out";
    const GLYPH_MAGNET = "magnet";
    const GLYPH_MAP_MARKER = "map-marker";
    const GLYPH_MINUS = "minus";
    const GLYPH_MINUS_SIGN = "minus-sign";
    const GLYPH_MOVE = "move";
    const GLYPH_MUSIC = "music";
    const GLYPH_NEW_WINDOW = "new-window";
    const GLYPH_OFF = "off";
    const GLYPH_OK = "ok";
    const GLYPH_OK_CIRCLE = "ok-circle";
    const GLYPH_OK_SIGN = "ok-sign";
    const GLYPH_OPEN = "open";
    const GLYPH_PAPERCLIP = "paperclip";
    const GLYPH_PAUSE = "pause";
    const GLYPH_PENCIL = "pencil";
    const GLYPH_PHONE = "phone";
    const GLYPH_PHONE_ALT = "phone-alt";
    const GLYPH_PICTURE = "picture";
    const GLYPH_PLANE = "plane";
    const GLYPH_PLAY = "play";
    const GLYPH_PLAY_CIRCLE = "play-circle";
    const GLYPH_PLUS = "plus";
    const GLYPH_PLUS_SIGN = "plus-sign";
    const GLYPH_PRINT = "print";
    const GLYPH_PUSHPIN = "pushpin";
    const GLYPH_QRCODE = "qrcode";
    const GLYPH_QUESTION_SIGN = "question-sign";
    const GLYPH_RANDOM = "random";
    const GLYPH_RECORD = "record";
    const GLYPH_REFRESH = "refresh";
    const GLYPH_REGISTRATION_MARK = "registration-mark";
    const GLYPH_REMOVE = "remove";
    const GLYPH_REMOVE_CIRCLE = "remove-circle";
    const GLYPH_REMOVE_SIGN = "remove-sign";
    const GLYPH_REPEAT = "repeat";
    const GLYPH_RESIZE_FULL = "resize-full";
    const GLYPH_RESIZE_HORIZONTAL = "resize-horizontal";
    const GLYPH_RESIZE_SMALL = "resize-small";
    const GLYPH_RESIZE_VERTICAL = "resize-vertical";
    const GLYPH_RETWEET = "retweet";
    const GLYPH_ROAD = "road";
    const GLYPH_SAVE = "save";
    const GLYPH_SAVED = "saved";
    const GLYPH_SCREENSHOT = "screenshot";
    const GLYPH_SD_VIDEO = "sd-video";
    const GLYPH_SEARCH = "search";
    const GLYPH_SEND = "send";
    const GLYPH_SHARE = "share";
    const GLYPH_SHARE_ALT = "share-alt";
    const GLYPH_SHOPPING_CART = "shopping-cart";
    const GLYPH_SIGNAL = "signal";
    const GLYPH_SORT = "sort";
    const GLYPH_SORT_BY_ALPHABET = "sort-by-alphabet";
    const GLYPH_SORT_BY_ALPHABET_ALT = "sort-by-alphabet-alt";
    const GLYPH_SORT_BY_ATTRIBUTES = "sort-by-attributes";
    const GLYPH_SORT_BY_ATTRIBUTES_ALT = "sort-by-attributes-alt";
    const GLYPH_SORT_BY_ORDER = "sort-by-order";
    const GLYPH_SORT_BY_ORDER_ALT = "sort-by-order-alt";
    const GLYPH_SOUND_5_1 = "sound-5-1";
    const GLYPH_SOUND_6_1 = "sound-6-1";
    const GLYPH_SOUND_7_1 = "sound-7-1";
    const GLYPH_SOUND_DOLBY = "sound-dolby";
    const GLYPH_SOUND_STEREO = "sound-stereo";
    const GLYPH_STAR = "star";
    const GLYPH_STAR_EMPTY = "star-empty";
    const GLYPH_STATS = "stats";
    const GLYPH_STEP_BACKWARD = "step-backward";
    const GLYPH_STEP_FORWARD = "step-forward";
    const GLYPH_STOP = "stop";
    const GLYPH_SUBTITLES = "subtitles";
    const GLYPH_TAG = "tag";
    const GLYPH_TAGS = "tags";
    const GLYPH_TASKS = "tasks";
    const GLYPH_TEXT_HEIGHT = "text-height";
    const GLYPH_TEXT_WIDTH = "text-width";
    const GLYPH_TH = "th";
    const GLYPH_TH_LARGE = "th-large";
    const GLYPH_TH_LIST = "th-list";
    const GLYPH_THUMBS_DOWN = "thumbs-down";
    const GLYPH_THUMBS_UP = "thumbs-up";
    const GLYPH_TIME = "time";
    const GLYPH_TINT = "tint";
    const GLYPH_TOWER = "tower";
    const GLYPH_TRANSFER = "transfer";
    const GLYPH_TRASH = "trash";
    const GLYPH_TREE_CONIFER = "tree-conifer";
    const GLYPH_TREE_DECIDUOUS = "tree-deciduous";
    const GLYPH_UNCHECKED = "unchecked";
    const GLYPH_UPLOAD = "upload";
    const GLYPH_USD = "usd";
    const GLYPH_USER = "user";
    const GLYPH_VOLUME_DOWN = "volume-down";
    const GLYPH_VOLUME_OFF = "volume-off";
    const GLYPH_VOLUME_UP = "volume-up";
    const GLYPH_WARNING_SIGN = "warning-sign";
    const GLYPH_WRENCH = "wrench";
    const GLYPH_ZOOM_IN = "zoom-in";
    const GLYPH_ZOOM_OUT = "zoom-out";


    // Font awesome icons
    const FA_ADJUST = "adjust";
    const FA_ADN = "adn";
    const FA_ALIGN_CENTER = "align-center";
    const FA_ALIGN_JUSTIFY = "align-justify";
    const FA_ALIGN_LEFT = "align-left";
    const FA_ALIGN_RIGHT = "align-right";
    const FA_AMBULANCE = "ambulance";
    const FA_ANCHOR = "anchor";
    const FA_ANDROID = "android";
    const FA_ANGLE_DOUBLE_DOWN = "angle-double-down";
    const FA_ANGLE_DOUBLE_LEFT = "angle-double-left";
    const FA_ANGLE_DOUBLE_RIGHT = "angle-double-right";
    const FA_ANGLE_DOUBLE_UP = "angle-double-up";
    const FA_ANGLE_DOWN = "angle-down";
    const FA_ANGLE_LEFT = "angle-left";
    const FA_ANGLE_RIGHT = "angle-right";
    const FA_ANGLE_UP = "angle-up";
    const FA_APPLE = "apple";
    const FA_ARCHIVE = "archive";
    const FA_ARROW_CIRCLE_DOWN = "arrow-circle-down";
    const FA_ARROW_CIRCLE_LEFT = "arrow-circle-left";
    const FA_ARROW_CIRCLE_O_DOWN = "arrow-circle-o-down";
    const FA_ARROW_CIRCLE_O_LEFT = "arrow-circle-o-left";
    const FA_ARROW_CIRCLE_O_RIGHT = "arrow-circle-o-right";
    const FA_ARROW_CIRCLE_O_UP = "arrow-circle-o-up";
    const FA_ARROW_CIRCLE_RIGHT = "arrow-circle-right";
    const FA_ARROW_CIRCLE_UP = "arrow-circle-up";
    const FA_ARROW_DOWN = "arrow-down";
    const FA_ARROW_LEFT = "arrow-left";
    const FA_ARROW_RIGHT = "arrow-right";
    const FA_ARROWS = "arrows";
    const FA_ARROWS_ALT = "arrows-alt";
    const FA_ARROWS_H = "arrows-h";
    const FA_ARROWS_V = "arrows-v";
    const FA_ARROW_UP = "arrow-up";
    const FA_ASTERISK = "asterisk";
    const FA_BACKWARD = "backward";
    const FA_BAN = "ban";
    const FA_BAR_CHART_O = "bar-chart-o";
    const FA_BARCODE = "barcode";
    const FA_BARS = "bars";
    const FA_BEER = "beer";
    const FA_BELL = "bell";
    const FA_BELL_O = "bell-o";
    const FA_BITBUCKET = "bitbucket";
    const FA_BITBUCKET_SQUARE = "bitbucket-square";
    const FA_BITCOIN = "bitcoin ";
    const FA_BOLD = "bold";
    const FA_BOLT = "bolt";
    const FA_BOOK = "book";
    const FA_BOOKMARK = "bookmark";
    const FA_BOOKMARK_O = "bookmark-o";
    const FA_BRIEFCASE = "briefcase";
    const FA_BTC = "btc";
    const FA_BUG = "bug";
    const FA_BUILDING_O = "building-o";
    const FA_BULLHORN = "bullhorn";
    const FA_BULLSEYE = "bullseye";
    const FA_CALENDAR = "calendar";
    const FA_CALENDAR_O = "calendar-o";
    const FA_CAMERA = "camera";
    const FA_CAMERA_RETRO = "camera-retro";
    const FA_CARET_DOWN = "caret-down";
    const FA_CARET_LEFT = "caret-left";
    const FA_CARET_RIGHT = "caret-right";
    const FA_CARET_SQUARE_O_DOWN = "caret-square-o-down";
    const FA_CARET_SQUARE_O_LEFT = "caret-square-o-left";
    const FA_CARET_SQUARE_O_RIGHT = "caret-square-o-right";
    const FA_CARET_SQUARE_O_UP = "caret-square-o-up";
    const FA_CARET_UP = "caret-up";
    const FA_CERTIFICATE = "certificate";
    const FA_CHAIN = "chain ";
    const FA_CHAIN_BROKEN = "chain-broken";
    const FA_CHECK = "check";
    const FA_CHECK_CIRCLE = "check-circle";
    const FA_CHECK_CIRCLE_O = "check-circle-o";
    const FA_CHECK_SQUARE = "check-square";
    const FA_CHECK_SQUARE_O = "check-square-o";
    const FA_CHEVRON_CIRCLE_DOWN = "chevron-circle-down";
    const FA_CHEVRON_CIRCLE_LEFT = "chevron-circle-left";
    const FA_CHEVRON_CIRCLE_RIGHT = "chevron-circle-right";
    const FA_CHEVRON_CIRCLE_UP = "chevron-circle-up";
    const FA_CHEVRON_DOWN = "chevron-down";
    const FA_CHEVRON_LEFT = "chevron-left";
    const FA_CHEVRON_RIGHT = "chevron-right";
    const FA_CHEVRON_UP = "chevron-up";
    const FA_CIRCLE = "circle";
    const FA_CIRCLE_O = "circle-o";
    const FA_CLIPBOARD = "clipboard";
    const FA_CLOCK_O = "clock-o";
    const FA_CLOUD = "cloud";
    const FA_CLOUD_DOWNLOAD = "cloud-download";
    const FA_CLOUD_UPLOAD = "cloud-upload";
    const FA_CNY = "cny ";
    const FA_CODE = "code";
    const FA_CODE_FORK = "code-fork";
    const FA_COFFEE = "coffee";
    const FA_COG = "cog";
    const FA_COGS = "cogs";
    const FA_COLUMNS = "columns";
    const FA_COMMENT = "comment";
    const FA_COMMENT_O = "comment-o";
    const FA_COMMENTS = "comments";
    const FA_COMMENTS_O = "comments-o";
    const FA_COMPASS = "compass";
    const FA_COMPRESS = "compress";
    const FA_COPY = "copy ";
    const FA_CREDIT_CARD = "credit-card";
    const FA_CROP = "crop";
    const FA_CROSSHAIRS = "crosshairs";
    const FA_CSS3 = "css3";
    const FA_CUT = "cut ";
    const FA_CUTLERY = "cutlery";
    const FA_DASHBOARD = "dashboard ";
    const FA_DEDENT = "dedent ";
    const FA_DESKTOP = "desktop";
    const FA_DOLLAR = "dollar ";
    const FA_DOT_CIRCLE_O = "dot-circle-o";
    const FA_DOWNLOAD = "download";
    const FA_DRIBBBLE = "dribbble";
    const FA_DROPBOX = "dropbox";
    const FA_EDIT = "edit ";
    const FA_EJECT = "eject";
    const FA_ELLIPSIS_H = "ellipsis-h";
    const FA_ELLIPSIS_V = "ellipsis-v";
    const FA_ENVELOPE = "envelope";
    const FA_ENVELOPE_O = "envelope-o";
    const FA_ERASER = "eraser";
    const FA_EUR = "eur";
    const FA_EURO = "euro ";
    const FA_EXCHANGE = "exchange";
    const FA_EXCLAMATION = "exclamation";
    const FA_EXCLAMATION_CIRCLE = "exclamation-circle";
    const FA_EXCLAMATION_TRIANGLE = "exclamation-triangle";
    const FA_EXPAND = "expand";
    const FA_EXTERNAL_LINK = "external-link";
    const FA_EXTERNAL_LINK_SQUARE = "external-link-square";
    const FA_EYE = "eye";
    const FA_EYE_SLASH = "eye-slash";
    const FA_FACEBOOK = "facebook";
    const FA_FACEBOOK_SQUARE = "facebook-square";
    const FA_FAST_BACKWARD = "fast-backward";
    const FA_FAST_FORWARD = "fast-forward";
    const FA_FEMALE = "female";
    const FA_FIGHTER_JET = "fighter-jet";
    const FA_FILE = "file";
    const FA_FILE_O = "file-o";
    const FA_FILES_O = "files-o";
    const FA_FILE_TEXT = "file-text";
    const FA_FILE_TEXT_O = "file-text-o";
    const FA_FILM = "film";
    const FA_FILTER = "filter";
    const FA_FIRE = "fire";
    const FA_FIRE_EXTINGUISHER = "fire-extinguisher";
    const FA_FLAG = "flag";
    const FA_FLAG_CHECKERED = "flag-checkered";
    const FA_FLAG_O = "flag-o";
    const FA_FLASH = "flash ";
    const FA_FLASK = "flask";
    const FA_FLICKR = "flickr";
    const FA_FLOPPY_O = "floppy-o";
    const FA_FOLDER = "folder";
    const FA_FOLDER_O = "folder-o";
    const FA_FOLDER_OPEN = "folder-open";
    const FA_FOLDER_OPEN_O = "folder-open-o";
    const FA_FONT = "font";
    const FA_FORWARD = "forward";
    const FA_FOURSQUARE = "foursquare";
    const FA_FROWN_O = "frown-o";
    const FA_GAMEPAD = "gamepad";
    const FA_GAVEL = "gavel";
    const FA_GBP = "gbp";
    const FA_GEAR = "gear ";
    const FA_GEARS = "gears ";
    const FA_GIFT = "gift";
    const FA_GITHUB = "github";
    const FA_GITHUB_ALT = "github-alt";
    const FA_GITHUB_SQUARE = "github-square";
    const FA_GITTIP = "gittip";
    const FA_GLASS = "glass";
    const FA_GLOBE = "globe";
    const FA_GOOGLE_PLUS = "google-plus";
    const FA_GOOGLE_PLUS_SQUARE = "google-plus-square";
    const FA_GROUP = "group ";
    const FA_HAND_O_DOWN = "hand-o-down";
    const FA_HAND_O_LEFT = "hand-o-left";
    const FA_HAND_O_RIGHT = "hand-o-right";
    const FA_HAND_O_UP = "hand-o-up";
    const FA_HDD_O = "hdd-o";
    const FA_HEADPHONES = "headphones";
    const FA_HEART = "heart";
    const FA_HEART_O = "heart-o";
    const FA_HOME = "home";
    const FA_HOSPITAL_O = "hospital-o";
    const FA_H_SQUARE = "h-square";
    const FA_HTML5 = "html5";
    const FA_INBOX = "inbox";
    const FA_INDENT = "indent";
    const FA_INFO = "info";
    const FA_INFO_CIRCLE = "info-circle";
    const FA_INR = "inr";
    const FA_INSTAGRAM = "instagram";
    const FA_ITALIC = "italic";
    const FA_JPY = "jpy";
    const FA_KEY = "key";
    const FA_KEYBOARD_O = "keyboard-o";
    const FA_KRW = "krw";
    const FA_LAPTOP = "laptop";
    const FA_LEAF = "leaf";
    const FA_LEGAL = "legal ";
    const FA_LEMON_O = "lemon-o";
    const FA_LEVEL_DOWN = "level-down";
    const FA_LEVEL_UP = "level-up";
    const FA_LIGHTBULB_O = "lightbulb-o";
    const FA_LINK = "link";
    const FA_LINKEDIN = "linkedin";
    const FA_LINKEDIN_SQUARE = "linkedin-square";
    const FA_LINUX = "linux";
    const FA_LIST = "list";
    const FA_LIST_ALT = "list-alt";
    const FA_LIST_OL = "list-ol";
    const FA_LIST_UL = "list-ul";
    const FA_LOCATION_ARROW = "location-arrow";
    const FA_LOCK = "lock";
    const FA_LONG_ARROW_DOWN = "long-arrow-down";
    const FA_LONG_ARROW_LEFT = "long-arrow-left";
    const FA_LONG_ARROW_RIGHT = "long-arrow-right";
    const FA_LONG_ARROW_UP = "long-arrow-up";
    const FA_MAGIC = "magic";
    const FA_MAGNET = "magnet";
    const FA_MAIL_FORWARD = "mail-forward ";
    const FA_MAIL_REPLY = "mail-reply ";
    const FA_MAIL_REPLY_ALL = "mail-reply-all";
    const FA_MALE = "male";
    const FA_MAP_MARKER = "map-marker";
    const FA_MAXCDN = "maxcdn";
    const FA_MEDKIT = "medkit";
    const FA_MEH_O = "meh-o";
    const FA_MICROPHONE = "microphone";
    const FA_MICROPHONE_SLASH = "microphone-slash";
    const FA_MINUS = "minus";
    const FA_MINUS_CIRCLE = "minus-circle";
    const FA_MINUS_SQUARE = "minus-square";
    const FA_MINUS_SQUARE_O = "minus-square-o";
    const FA_MOBILE = "mobile";
    const FA_MOBILE_PHONE = "mobile-phone ";
    const FA_MONEY = "money";
    const FA_MOON_O = "moon-o";
    const FA_MUSIC = "music";
    const FA_OUTDENT = "outdent";
    const FA_PAGELINES = "pagelines";
    const FA_PAPERCLIP = "paperclip";
    const FA_PASTE = "paste ";
    const FA_PAUSE = "pause";
    const FA_PENCIL = "pencil";
    const FA_PENCIL_SQUARE = "pencil-square";
    const FA_PENCIL_SQUARE_O = "pencil-square-o";
    const FA_PHONE = "phone";
    const FA_PHONE_SQUARE = "phone-square";
    const FA_PICTURE_O = "picture-o";
    const FA_PINTEREST = "pinterest";
    const FA_PINTEREST_SQUARE = "pinterest-square";
    const FA_PLANE = "plane";
    const FA_PLAY = "play";
    const FA_PLAY_CIRCLE = "play-circle";
    const FA_PLAY_CIRCLE_O = "play-circle-o";
    const FA_PLUS = "plus";
    const FA_PLUS_CIRCLE = "plus-circle";
    const FA_PLUS_SQUARE = "plus-square";
    const FA_PLUS_SQUARE_O = "plus-square-o";
    const FA_POWER_OFF = "power-off";
    const FA_PRINT = "print";
    const FA_PUZZLE_PIECE = "puzzle-piece";
    const FA_QRCODE = "qrcode";
    const FA_QUESTION = "question";
    const FA_QUESTION_CIRCLE = "question-circle";
    const FA_QUOTE_LEFT = "quote-left";
    const FA_QUOTE_RIGHT = "quote-right";
    const FA_RANDOM = "random";
    const FA_REFRESH = "refresh";
    const FA_RENREN = "renren";
    const FA_REPEAT = "repeat";
    const FA_REPLY = "reply";
    const FA_REPLY_ALL = "reply-all";
    const FA_RETWEET = "retweet";
    const FA_RMB = "rmb ";
    const FA_ROAD = "road";
    const FA_ROCKET = "rocket";
    const FA_ROTATE_LEFT = "rotate-left ";
    const FA_ROTATE_RIGHT = "rotate-right ";
    const FA_ROUBLE = "rouble ";
    const FA_RSS = "rss";
    const FA_RSS_SQUARE = "rss-square";
    const FA_RUB = "rub";
    const FA_RUBLE = "ruble ";
    const FA_RUPEE = "rupee ";
    const FA_SAVE = "save ";
    const FA_SCISSORS = "scissors";
    const FA_SEARCH = "search";
    const FA_SEARCH_MINUS = "search-minus";
    const FA_SEARCH_PLUS = "search-plus";
    const FA_SHARE = "share";
    const FA_SHARE_SQUARE = "share-square";
    const FA_SHARE_SQUARE_O = "share-square-o";
    const FA_SHIELD = "shield";
    const FA_SHOPPING_CART = "shopping-cart";
    const FA_SIGNAL = "signal";
    const FA_SIGN_IN = "sign-in";
    const FA_SIGN_OUT = "sign-out";
    const FA_SITEMAP = "sitemap";
    const FA_SKYPE = "skype";
    const FA_SMILE_O = "smile-o";
    const FA_SORT = "sort";
    const FA_SORT_ALPHA_ASC = "sort-alpha-asc";
    const FA_SORT_ALPHA_DESC = "sort-alpha-desc";
    const FA_SORT_AMOUNT_ASC = "sort-amount-asc";
    const FA_SORT_AMOUNT_DESC = "sort-amount-desc";
    const FA_SORT_ASC = "sort-asc";
    const FA_SORT_DESC = "sort-desc";
    const FA_SORT_DOWN = "sort-down ";
    const FA_SORT_NUMERIC_ASC = "sort-numeric-asc";
    const FA_SORT_NUMERIC_DESC = "sort-numeric-desc";
    const FA_SORT_UP = "sort-up ";
    const FA_SPINNER = "spinner";
    const FA_SQUARE = "square";
    const FA_SQUARE_O = "square-o";
    const FA_STACK_EXCHANGE = "stack-exchange";
    const FA_STACK_OVERFLOW = "stack-overflow";
    const FA_STAR = "star";
    const FA_STAR_HALF = "star-half";
    const FA_STAR_HALF_EMPTY = "star-half-empty ";
    const FA_STAR_HALF_FULL = "star-half-full ";
    const FA_STAR_HALF_O = "star-half-o";
    const FA_STAR_O = "star-o";
    const FA_STEP_BACKWARD = "step-backward";
    const FA_STEP_FORWARD = "step-forward";
    const FA_STETHOSCOPE = "stethoscope";
    const FA_STOP = "stop";
    const FA_STRIKETHROUGH = "strikethrough";
    const FA_SUBSCRIPT = "subscript";
    const FA_SUITCASE = "suitcase";
    const FA_SUN_O = "sun-o";
    const FA_SUPERSCRIPT = "superscript";
    const FA_TABLE = "table";
    const FA_TABLET = "tablet";
    const FA_TACHOMETER = "tachometer";
    const FA_TAG = "tag";
    const FA_TAGS = "tags";
    const FA_TASKS = "tasks";
    const FA_TERMINAL = "terminal";
    const FA_TEXT_HEIGHT = "text-height";
    const FA_TEXT_WIDTH = "text-width";
    const FA_TH = "th";
    const FA_TH_LARGE = "th-large";
    const FA_TH_LIST = "th-list";
    const FA_THUMBS_DOWN = "thumbs-down";
    const FA_THUMBS_O_DOWN = "thumbs-o-down";
    const FA_THUMBS_O_UP = "thumbs-o-up";
    const FA_THUMBS_UP = "thumbs-up";
    const FA_THUMB_TACK = "thumb-tack";
    const FA_TICKET = "ticket";
    const FA_TIMES = "times";
    const FA_TIMES_CIRCLE = "times-circle";
    const FA_TIMES_CIRCLE_O = "times-circle-o";
    const FA_TINT = "tint";
    const FA_TOGGLE_DOWN = "toggle-down ";
    const FA_TOGGLE_LEFT = "toggle-left ";
    const FA_TOGGLE_RIGHT = "toggle-right ";
    const FA_TOGGLE_UP = "toggle-up ";
    const FA_TRASH_O = "trash-o";
    const FA_TRELLO = "trello";
    const FA_TROPHY = "trophy";
    const FA_TRUCK = "truck";
    const FA_TRY = "try";
    const FA_TUMBLR = "tumblr";
    const FA_TUMBLR_SQUARE = "tumblr-square";
    const FA_TURKISH_LIRA = "turkish-lira ";
    const FA_TWITTER = "twitter";
    const FA_TWITTER_SQUARE = "twitter-square";
    const FA_UMBRELLA = "umbrella";
    const FA_UNDERLINE = "underline";
    const FA_UNDO = "undo";
    const FA_UNLINK = "unlink ";
    const FA_UNLOCK = "unlock";
    const FA_UNLOCK_ALT = "unlock-alt";
    const FA_UNSORTED = "unsorted ";
    const FA_UPLOAD = "upload";
    const FA_USD = "usd";
    const FA_USER = "user";
    const FA_USER_MD = "user-md";
    const FA_USERS = "users";
    const FA_VIDEO_CAMERA = "video-camera";
    const FA_VIMEO_SQUARE = "vimeo-square";
    const FA_VK = "vk";
    const FA_VOLUME_DOWN = "volume-down";
    const FA_VOLUME_OFF = "volume-off";
    const FA_VOLUME_UP = "volume-up";
    const FA_WARNING = "warning ";
    const FA_WEIBO = "weibo";
    const FA_WHEELCHAIR = "wheelchair";
    const FA_WINDOWS = "windows";
    const FA_WON = "won ";
    const FA_WRENCH = "wrench";
    const FA_XING = "xing";
    const FA_XING_SQUARE = "xing-square";
    const FA_YEN = "yen ";
    const FA_YOUTUBE = "youtube";
    const FA_YOUTUBE_PLAY = "youtube-play";
    const FA_YOUTUBE_SQUARE = "youtube-square";

    public static function fa($name)
    {
	return static::_icon("fa", $name);
    }

    public static function glyphicon($name)
    {
	return static::_icon("glyphicon", $name);
    }

    private static function _icon($prefix, $name)
    {
	$icon = new Element('i');
	$icon->addClass("{$prefix} {$prefix}-{$name}");
	return $icon->html();
    }

}

?>