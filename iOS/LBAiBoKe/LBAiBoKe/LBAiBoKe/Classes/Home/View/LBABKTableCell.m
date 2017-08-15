//
//  LBABKTableCell.m
//  LBAiBoKe
//
//  Created by liubo on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKTableCell.h"
#import "LBABKModel.h"
#import <SDWebImage/UIImageView+WebCache.h>
@implementation LBABKTableCell{

    UIImageView *_imageView;
    UILabel *_titleLabel;
    UILabel *_content;
}

- (instancetype)init
{
    self = [super init];
    if (self) {
    }
    return self;
}

+ (instancetype)cellWithTableView:(UITableView *)tableView{

    LBABKTableCell *cell = [tableView dequeueReusableCellWithIdentifier:@"LBABKTableCell"];
    if (!cell) {
        cell = [[LBABKTableCell alloc]initWithStyle:UITableViewCellStyleDefault reuseIdentifier:@"LBABKTableCell"];
    }
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    return cell;
}

-(instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{

    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        [self setUpLayout];
    }
    return self;
}

- (void)setModel:(LBABKModel *)model{

    _model = model;
    _titleLabel.text = model.title;
    _content.text = model.content;
    [_imageView sd_setImageWithURL:[NSURL URLWithString:model.thumb]];
}
- (void)layoutSubviews{
    [super layoutSubviews];
}
- (void)setUpLayout{

    // 图片
    _imageView = [[UIImageView alloc]init];
    _imageView.backgroundColor = [UIColor redColor];
    [self.contentView addSubview:_imageView];
    [_imageView mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.top.bottom.equalTo(@0);
        make.width.equalTo(@75);
    }];
    // 标题
    _titleLabel = [[UILabel alloc]init];
    _titleLabel.text = @"标题";
    _titleLabel.font = [UIFont systemFontOfSize:15];
    [self.contentView addSubview:_titleLabel];
    [_titleLabel mas_makeConstraints:^(MASConstraintMaker *make) {
        make.top.equalTo(@20);
        make.left.equalTo(_imageView.mas_right).offset(10);
        make.right.equalTo(self.contentView.mas_right).offset(-15);
        make.height.equalTo(@20);
    }];
    // 内容
    _content = [[UILabel alloc]init];
    _content.text = @"副标题";
    [self.contentView addSubview:_content];
    [_content mas_makeConstraints:^(MASConstraintMaker *make) {
        make.top.equalTo(_titleLabel.mas_bottom);
        make.left.equalTo(_titleLabel.mas_left);
        make.right.equalTo(self.contentView.mas_right).offset(-15);
        make.height.equalTo(@20);
    }];
}
@end
